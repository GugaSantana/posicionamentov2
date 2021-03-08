<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    // private $url = ;
    private $email = "gustavo_ssantana@hotmail.com";
    private $token = "2C3C864C26984A90BEAC59E1D4B7CBB0";
    private $pagseguro_url_js = "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js";

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
        return view('site.checkout')->with([
            'menu_page' => 4,
            'session' => $session->id,
            'pagseguro_email' => $this->email,
            'pagseguro_token' => $this->token,
            'pagseguro_url_js' => $this->pagseguro_url_js
        ]);
    }

    /**
     * Criar uma sessão
     *
     * @return void
     */
    public function createSession(){
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

    public function session(){
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

    public function getPaymentMethods(){
        dd('oi');
    }
}
