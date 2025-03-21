<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentCanceled;
use App\Notifications\PaymentConfirmed;
use App\Notifications\PaymentWaiting;
use App\Order;
use App\Product;
use App\Stock;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;

class PaymentController extends Controller
{
    // private $url = ;
    private $email = "posicionamento@gmail.com";
    private $token = "cc3020e4-7466-44d0-bf7a-e76ae1e8a38efa33c8ab4562bea001188265ed183592ba3c-b0c4-4936-bef2-9c29eeea7a3a";

    // teste
    //private $email = "gustavo_ssantana@hotmail.com";
    //private $token = "2C3C864C26984A90BEAC59E1D4B7CBB0";

    //private $pagseguro_url_js = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"; //Homolog
    

    // Token homolog posicionamento C50134A327174573B624C1CE6DE54B8A
    // Token produção cc3020e4-7466-44d0-bf7a-e76ae1e8a38efa33c8ab4562bea001188265ed183592ba3c-b0c4-4936-bef2-9c29eeea7a3a


    //private $url = "https://ws.sandbox.pagseguro.uol.com.br/"; // Homolog
    private $url = "https://ws.pagseguro.uol.com.br/"; //Prod

/*     public function config()
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
    } */

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

        // // Verificar se o usuario ta com pagamento pendente 
        // if(User::where('email', $request['email'])->whereHas('order')->exists()){
        //     //Ja tem um pagamento
        //     $status = User::with('order')->where('email', $request['email'])->whereHas('order')->first();
        //     return back()->with('message', 'Você ja possui uma compra com status '. $status->order->status);
        // }

        // Busca o voucher no banco
        $product = Product::where('voucher', $request['voucher'])->first();
        if(empty($product)){
            return back()->with('message', 'Voucher inválido');
        }

        // Verifica se tem estoque

        if($product->stock->total == 0){
            return back()->with('message', 'Voucher esgotado!');
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
            'product' => $product,
            'user_email' => $request['email']
        ]);
    }

    public function checkout_landingpage(){
        // Busca o voucher no banco
        $product = Product::find(15);
        //$product = Product::find(12);
        
        $session = json_decode($this->createSession());

        // dd($session);
        // dd('oi');
        return view('site.landingpage.buy')->with([
            'menu_page' => 4,
            'session' => $session->id,
            'pagseguro_email' => $this->email,
            'pagseguro_token' => $this->token,
            'product' => $product
        ]);
    }

    /**
     * Criar uma sessão
     *
     * @return String
     */
    public function createSession()
    {
        $url = $this->url."v2/sessions";

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

        $product = Product::with('stock')->where('name', $product_name)->first();

        $user = User::where('email', $user_email)->first();

        $data = $this->prepareDataTransaction($user, $product, $senderHash, $creditCardToken, $phoneHolder, $cpfHolder, $installmentCombo, $nameHolder, $birthdayHolder);

        // dd($data);

        $transaction = $this->sendTransaction($data);
        
        $result = $this->formatXml($transaction[1]);

        if (!isset($result['error'])) {
            $order = Order::where('user_id', $user->id)->orderby('id', 'desc')->first();
            $order->payment_code = $result['code'];
            $order->save();

            // Atualiza o estoque
            Stock::create(
                [
                    "product_id" => $product->id,
                    "movement" => 1,
                    "total" => $product->stock->total - 1
                ]
            );

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

    public function finishPaymentLanding(Request $request)
    {
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

        $nameCustomer = $request['nameCustomer'];
        $cep = $request['cep'];
        $address = $request['address'];
        $quarter = $request['quarter'];
        $city = $request['city'];
        $state = $request['state'];
        $number = $request['number'];
        $complement = $request['complement'];

        $product = Product::with('stock')->where('name', $product_name)->first();

        $user = User::where('email', $user_email)->first();
        if(empty($user)){
            //Cria um usuario fake
            $user = User::create([
                'name' => $nameCustomer,
                'gender' => 'n/a',
                'nascimento' => $birthdayHolder,
                'schooling' => '',
                'course' => '',
                'email' => $user_email,  
                'cpf' =>$cpfHolder,
                'password' => Hash::make($request['password']),
                'fone' =>$phoneHolder,
                'cellphone' =>'',
                'cep' =>$cep,
                'address' =>$address,
                'quarter' =>$quarter,
                'city' =>$city,
                'state' =>$state,
                'number' =>$number ?? 0,
                'complement' => $complement ?? '',
                'company_id' => 6,
                'branch' =>'',
                'activity' =>'',
                'office' =>'',
                'role_id' => null,
            ]);
        }

        $data = $this->prepareDataTransaction($user, $product, $senderHash, $creditCardToken, $phoneHolder, $cpfHolder, $installmentCombo, $nameHolder, $birthdayHolder);

        // dd($data);

        $transaction = $this->sendTransaction($data);
        
        $result = $this->formatXml($transaction[1]);

        if (!isset($result['error'])) {
            $order = Order::where('user_id', $user->id)->orderby('id', 'desc')->first();
            $order->payment_code = $result['code'];
            $order->save();

            // Atualiza o estoque
            Stock::create(
                [
                    "product_id" => $product->id,
                    "movement" => 1,
                    "total" => $product->stock->total - 1
                ]
            );

            return [
                "success" => 1,
                "message" => $result['code']
            ];
        } else {
            // ERROR
            return [
                "success" => 0,
                "message" => $result
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

        //Email de recebimento de pagamento
        //$order->user->notify(new PaymentWaiting($order->user));
        
        // Payment
        $data['paymentMode'] = 'default';
        $data['paymentMethod'] = 'creditCard';
        $data['currency'] = 'BRL';
        //Sender
        $data['senderHash'] = $senderHash;
        $data['senderName'] = $user->name; //name cliente
        $data['senderEmail'] = $user->email;//strtolower(str_replace(" ","",$user->name))."@sandbox.pagseguro.com.br"; // Produção
        //$data['senderEmail'] = strtolower(str_replace(" ","",$user->name))."@sandbox.pagseguro.com.br"; // Homolog
        
        // Phone
        $data['senderAreaCode'] = substr($phoneHolder, 1, 2); //area telefone
        $data['senderPhone'] = substr(str_replace([' ', '-'], '', $phoneHolder), 4); // telefone
        // Documents
        $data['senderCPF'] = str_replace(['.', '-'], '', $cpfHolder); // cpf
        $data['receiverEmail'] = $this->email; //Email do receptor
        // Items
        //$data['extraAmount'] = number_format(($installments[0] * $installments[1]) - $product->price, 2); //Valor extra
        // Produto
        $data['itemId1'] = $product->id; //Id do produto
        $data['itemDescription1'] = $product->name; //Descrição do produto
        $data['itemAmount1'] = $product->price; // preço do produto
        $data['itemQuantity1'] = '1'; // quantidade do produto
        //$data['notificationURL'] = 'https://sualoja.com.br/notificacao.html'; // url de callback de confirmação
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
        if($product->installment_free > 1){
            $data['noInterestInstallmentQuantity'] = $product->installment_free; // quantidade de parcelas sem juros
        }

        // Info do cartao
        $data['creditCardHolderName'] = $nameHolder;
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

    public function verifyPayment($notificationCode)
    {
        $url = $this->url . "v3/transactions/notifications/{$notificationCode}?email={$this->email}&token={$this->token}";

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
            Log::critical("message", $err);
        } else {
            $return = $this->formatXml($response);
            // $return->status;
            //dump($return['code']);
            //dump($return['status']);
            //dump($this->getStatus($return['status']));

            $order = $this->updateStatusOrder($return['code'], $this->getStatus($return['status']));

            // Disparo de email
            switch ($return['status']) {
                case '3':
                    $order->user->notify(new PaymentConfirmed($order->user));
                    break;
                case '7':
                    $order->user->notify(new PaymentCanceled($order->user));
                    break;
                default:
                    # code...
                    break;
            }

            
            
        }
    }

    public function updateStatusOrder($paymentCode, $status){
        $order = Order::where('payment_code', $paymentCode)->first();
        $order->status = $status;
        $order->save();

        if($order->product->id == 12 && $order->status == 'Paga'){
            $order->user->enable = 1;
            $order->user->role_id = 2;
            $order->user->save();
        }

        return $order;
    }

    public function callback(Request $request)
    {
        Log::alert("Recebimento de callback pagseguro", $request->all());
        $this->verifyPayment($request['notificationCode']);
        Log::alert("Pedido atualizado com sucesso");
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
            case '5':
                return 'Em disputa';
                break;
            case '6':
                return 'Devolvida';
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
