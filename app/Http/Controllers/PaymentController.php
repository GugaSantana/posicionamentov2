<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // private $url = ;
    private $email = "gustavo_ssantana@hotmail.com";
    private $token = "2C3C864C26984A90BEAC59E1D4B7CBB0";
    private $pagseguro_url_js = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";

    private $url = "https://ws.sandbox.pagseguro.uol.com.br/v2/"; // Homolog

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

    public function checkout()
    {
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
            'price' => 50
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
        // code de pagamento  = 07399B55-5871-48DB-8418-042954715D00;
        $senderHash = $request["senderHash"];
        $creditCardNumber = $request["creditCardNumber"];
        $creditCardExpMonth = $request["creditCardExpMonth"];
        $creditCardExpYear = $request["creditCardExpYear"];
        $creditCardCvv = $request["creditCardCvv"];
        $creditCardToken = $request["creditCardToken"];

        $data = $this->prepareDataTransaction($senderHash, $creditCardToken);
        $this->sendTransaction($data);
    }

    public function prepareDataTransaction($senderHash, $creditCardToken)
    {
        
        // Payment
        $data['paymentMode'] = 'default';
        $data['paymentMethod'] = 'creditCard';
        $data['currency'] = 'BRL';
        //Sender
        $data['senderHash'] = $senderHash;
        $data['senderName'] = 'Jose Comprador';
        $data['senderEmail'] = 'comprador@sandbox.pagseguro.com.br';
        // Phone
        $data['senderAreaCode'] = '11';
        $data['senderPhone'] = '56273440';
        // Documents
        $data['senderCPF'] = '22111944785';
        
        $data['receiverEmail'] = "gustavo_ssantana@hotmail.com";
        $data['extraAmount'] = '0.00';
        $data['itemId1'] = '0001';
        $data['itemDescription1'] = 'Notebook Prata';
        $data['itemAmount1'] = '10300.00';
        $data['itemQuantity1'] = '1';
        $data['itemId2'] = '0002';
        $data['itemDescription2'] = 'Notebook Azul';
        $data['itemAmount2'] = '10000.00';
        $data['itemQuantity2'] = '1';
        $data['notificationURL'] = 'https://sualoja.com.br/notificacao.html';
        $data['reference'] = 'REF1234';
        $data['shippingAddressStreet'] = 'Av. Brig. Faria Lima';
        $data['shippingAddressNumber'] = '1384';
        $data['shippingAddressComplement'] = '5o andar';
        $data['shippingAddressDistrict'] = 'Jardim Paulistano';
        $data['shippingAddressPostalCode'] = '01452002';
        $data['shippingAddressCity'] = 'Sao Paulo';
        $data['shippingAddressState'] = 'SP';
        $data['shippingAddressCountry'] = 'BRA';
        $data['shippingType'] = '1';
        $data['shippingCost'] = '01.00';
        $data['creditCardToken'] = $creditCardToken;
        $data['installmentQuantity'] = '7';
        $data['installmentValue'] = '3030.94';
        $data['noInterestInstallmentQuantity'] = '5';
        $data['creditCardHolderName'] = 'Jose Comprador';
        $data['creditCardHolderCPF'] = '22111944785';
        $data['creditCardHolderBirthDate'] = '27/10/1987';
        $data['creditCardHolderAreaCode'] = '11';
        $data['creditCardHolderPhone'] = '56273440';
        $data['billingAddressStreet'] = 'Av. Brig. Faria Lima';
        $data['billingAddressNumber'] = '1384';
        $data['billingAddressComplement'] = '5o andar';
        $data['billingAddressDistrict'] = 'Jardim Paulistano';
        $data['billingAddressPostalCode'] = '01452002';
        $data['billingAddressCity'] = 'Sao Paulo';
        $data['billingAddressState'] = 'SP';
        $data['billingAddressCountry'] = 'BRA';

        return $data;
    }





    public function sendTransaction($data)
    {
        $url = $this->url . "transactions?email={$this->email}&token={$this->token}";
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
                "Postman-Token: a54808d4-b08a-4f19-8687-d56eeeb6680c",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            dd($err);
        } else {
            dd($response);
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

    public function getPaymentMethods()
    {
        dd('oi');
    }
}
