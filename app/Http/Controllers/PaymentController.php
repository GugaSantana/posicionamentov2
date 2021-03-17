<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class PaymentController extends Controller
{
    // private $url = ;
    private $email = "gustavo_ssantana@hotmail.com";
    private $token = "2C3C864C26984A90BEAC59E1D4B7CBB0";
    private $pagseguro_url_js = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";

    private $url = "https://ws.sandbox.pagseguro.uol.com.br/"; // Homolog

    public function config()
    {
        //E-mail usado na sua conta do pagseguro
        $pagseguro_email = "seu@email.com";
        //Token gerado pelo Pagseguro (PARA USAR EM MODO PRODUÇÃO GERE UM TOKEN NO PAINEL PAGSEGURO).
        $pagseguro_token = "00000000000000000000000000000000";
        //Para usar o checkout em modo produção deixe essa variável em branco, para usar em modo teste mantenha o valor ".sandbox".
        //$sandbox = ".sandbox";
        $sandbox = ".sandbox";
        //Essa URL será acionada sempre que uma transação ocorrer
        $pagseguro_url = "https://ws" . $sandbox . ".pagseguro.uol.com.br/v2/transactions";
        //Essa URL carrega a api javaScript do PagSeguro
        $pagseguro_url_js = "https://stc" . $sandbox . ".pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";
        //Essa URL será acionada quando o status de uma transação for modificado para Pago ou outro status. Mude essa URL de acordo com o endereço do seu site e de onde está a aplicação.
        $pagseguro_retorno = "https://seusite.com.br/pagseguro/retorno.php";
    }

    /**
     * Tela de Checkout/Pagamento
     *
     * @return void
     */
    public function checkout(Request $request)
    {
        $auth = $this->authenticationUsers($request['email'], $request['senha']);

        if(!$auth[0]){
            return back()->with('message', $auth[1]);
        }

        // Verificar se o usuario ta com pagamento pendente 
        if(User::where('email', $request['email'])->whereHas('order')->exists()){
            //Ja tem um pagamento
            $status = User::with('order')->where('email', $request['email'])->whereHas('order')->first();
            return back()->with('message', 'Você ja possui uma compra com status '. $status->order->status);
        }

        // Busca o voucher no banco
        $product = Product::where('voucher', $request['voucher'])->first();
        if(empty($product)){
            return back()->with('message', 'Voucher inválido');
        }
        // dd(Auth::user()->order);

        // dd(Auth::user());
        // $this->getPaymentMethods();
        $session = json_decode($this->createSession());

        // dd($session);
        // dd('oi');
        return view('site.checkout_new')->with([
            'menu_page' => 4,
            'session' => $session->id,
            'pagseguro_email' => $this->email,
            'pagseguro_token' => $this->token,
            'pagseguro_url_js' => $this->pagseguro_url_js,
            'product' => $product,
            'user_email' => $request['email']
        ]);
    }

    /**
     * Criar uma sessão
     *
     * @return void
     */
    public function createSession()
    {
        $url = "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions";

        $credenciais = array(
            "email" => $this->email,
            "token" => $this->token
        );

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($credenciais));
        $resultado = curl_exec($curl);
        curl_close($curl);
        $session = simplexml_load_string($resultado);
        return json_encode($session);
    }

    public function finishPayment(Request $request)
    {
        // Verificar se o usuario ta com pagamento pendente 
        if(isset(Auth::user()->order) && !empty(Auth::user()->order->wherenotnull('payment_code')->first())){
            //Ja tem um pagamento
            return [
                "success" => 0,
                "message" => 'Você já possui um pedido de compra'
            ];
        }

        // dd($request);
        // code de pagamento  = 07399B55-5871-48DB-8418-042954715D00;
        $senderHash = $request["senderHash"];
        $nameHolder = $request["nameHolder"];
        $cpfHolder = $request["cpfHolder"];
        $birthdayHolder = $request["birthdayHolder"];
        $phoneHolder = $request["phoneHolder"];
        // $creditCardNumber = $request["creditCardNumber"];
        // $creditCardBrand = $request["creditCardBrand"];
        // $creditCardExpMonth = $request["creditCardExpMonth"];
        // $creditCardExpYear = $request["creditCardExpYear"];
        // $creditCardCvv = $request["creditCardCvv"];
        $creditCardToken = $request["creditCardToken"];
        $installmentCombo = $request["installmentCombo"];
        $product_name = $request['product_name'];
        $user_email = $request['user_email'];

        $product = Product::where('name', $product_name)->first();

        $user = User::where('email', $user_email)->first();

        $data = $this->prepareDataTransaction($user, $product, $senderHash, $creditCardToken, $phoneHolder, $cpfHolder, $installmentCombo, $nameHolder, $birthdayHolder);

        // dd($data);

        $transaction = $this->sendTransaction($data);
        
        $result = $this->formatXml($transaction[1]);

        if (!isset($result['error'])) {
            $order = Order::where('user_id', $user->id)->first();
            $order->payment_code = $result['code'];
            $order->save();

            return [
                "success" => 1,
                "message" => $result['code']
            ];
        } else {
            // ERROR
            return [
                "success" => 0,
                "message" => $result['error']['message']
            ];
        }
    }

    public function formatXml($xml)
    {
        $xml = simplexml_load_string($xml);
        $json = json_encode($xml);
        $array = json_decode($json, TRUE);

        return $array;
    }

    public function prepareDataTransaction($user, $product, $senderHash, $creditCardToken, $phoneHolder, $cpfHolder, $installmentCombo, $nameHolder, $birthdayHolder)
    {
        $installments = explode('|', $installmentCombo);
        // dd($user);
        //Cria uma order
        $order = Order::create([
            'product_id' => $product->id,
            'user_id' => $user->id,
            'price' => $product->price,
            'installment' => $installments[0],
            'installment_value' => $installments[1],
        ]);
        // Payment
        $data['paymentMode'] = 'default';
        $data['paymentMethod'] = 'creditCard';
        $data['currency'] = 'BRL';
        //Sender
        $data['senderHash'] = $senderHash;
        $data['senderName'] = $user->name; //name cliente
        $data['senderEmail'] = strtolower(str_replace(" ","",$user->name))."@sandbox.pagseguro.com.br"; // email cliente
        // Phone
        $data['senderAreaCode'] = substr($phoneHolder, 1, 2); //area telefone
        $data['senderPhone'] = substr(str_replace([' ', '-'], '', $phoneHolder), 4); // telefone
        // Documents
        $data['senderCPF'] = str_replace(['.', '-'], '', $cpfHolder); // cpf
        $data['receiverEmail'] = "gustavo_ssantana@hotmail.com"; //Email do receptor
        // Items
        $data['extraAmount'] = '0.00'; //Valor extra
        // Produto
        $data['itemId1'] = $product->id; //Id do produto
        $data['itemDescription1'] = $product->name; //Descrição do produto
        $data['itemAmount1'] = $product->price; // preço do produto
        $data['itemQuantity1'] = '1'; // quantidade do produto
        $data['notificationURL'] = 'https://sualoja.com.br/notificacao.html'; // url de callback de confirmação
        $data['reference'] = $order->id; //id da compra criada no sistema
        //Dados de entrega
        $data['shippingAddressStreet'] = $user->address; // rua
        $data['shippingAddressNumber'] = $user->number; // numero
        $data['shippingAddressComplement'] = $user->compĺement; // complemento
        $data['shippingAddressDistrict'] = $user->quarter; // bairro
        $data['shippingAddressPostalCode'] = $user->cep; // cep
        $data['shippingAddressCity'] = $user->city; // cidade
        $data['shippingAddressState'] = $user->state; // estado
        $data['shippingAddressCountry'] = 'BRA';

        // $data['shippingType'] = '1';
        // $data['shippingCost'] = '01.00';
        $data['creditCardToken'] = $creditCardToken;

        $data['installmentQuantity'] = $installments[0]; // quantidade de parcelas
        $data['installmentValue'] = $installments[1]; // valor das parcelas
        $data['noInterestInstallmentQuantity'] = $product->installment; // quantidade de parcelas sem juros

        // Info do cartao
        $name = explode(' ', $nameHolder);
        $data['creditCardHolderName'] = $name[0] . ' ' . $name[1];
        $data['creditCardHolderCPF'] = str_replace(['.', '-'], '', $cpfHolder);
        $data['creditCardHolderBirthDate'] = $birthdayHolder;
        $data['creditCardHolderAreaCode'] = substr($phoneHolder, 1, 2);
        $data['creditCardHolderPhone'] = substr(str_replace([' ', '-'], '', $phoneHolder), 4);

        $data['billingAddressStreet'] = $user->address;
        $data['billingAddressNumber'] = $user->number;
        $data['billingAddressComplement'] = $user->complement;
        $data['billingAddressDistrict'] = $user->quarter;
        $data['billingAddressPostalCode'] = $user->cep;
        $data['billingAddressCity'] = $user->city;
        $data['billingAddressState'] = $user->state;
        $data['billingAddressCountry'] = 'BRA';

        return $data;
    }

    public function sendTransaction($data)
    {
        $url = $this->url . "v2/transactions?email={$this->email}&token={$this->token}";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>  http_build_query($data),
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return [false, $err];
        } else {
            return [true, $response];
        }
    }
    public function session()
    {
        // $url = "https://ws".$sandbox.".pagseguro.uol.com.br/v2/sessions?email=".$pagseguro_email."&token=".$pagseguro_token;
        // $curl = curl_init($url);
        // curl_setopt($curl,CURLOPT_POST,1);
        // curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
        // curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        // $retorno_transaction = curl_exec($curl);
        // curl_close($curl);
        // $session = simplexml_load_string($retorno_transaction);
        // echo json_encode($session);
    }

    public function verifyPayment()
    {
        $order = Order::find(4);

        $url = $this->url . "v3/transactions/9FBFAE482A514D2E82BE06489D53AB28?email={$this->email}&token={$this->token}";

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            dd($err);
        } else {
            $return = $this->formatXml($response);
            // $return->status;
            dump($return['status']);
            dd($this->getStatus($return['status']));
        }
    }

    public function callback(Request $request)
    {
    }

    public function getStatus($statusCode)
    {
        switch ($statusCode) {
            case '1':
                return 'Aguardando pagamento';
                break;
            case '2':
                return 'Em análise';
                break;
            case '3':
                return 'Paga';
                break;
            case '4':
                return 'Disponível';
                break;
            case '7':
                return 'Cancelada';
                break;

            default:
                # code...
                break;
        }
    }

    public function authenticationUsers($email, $password)
    {
        $user = User::where('email', $email)->first();
        if (isset($user)) {
            $check = \Hash::check($password, $user->password);

            if ($check == true) {
                return [true, "Ok"];
            }
            return [false, "Senha incorreta"];    
        }
        return [false, "Email não encontrado"];
    }
}
