<?php

namespace App\Http\Controllers;

use App\Instrumento1;
use App\Instrumento10;
use App\Instrumento11;
use App\Instrumento12;
use App\Instrumento13;
use App\Instrumento14;
use App\Instrumento17;
use App\Instrumento18;
use App\Instrumento19;
use App\Instrumento2;
use App\Instrumento20;
use App\Instrumento3;
use App\Instrumento4;
use App\Instrumento5;
use App\Instrumento6;
use App\Instrumento7;
use App\Instrumento8;
use App\Instrumento9;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('dashboard');
    }
    public function instrumento1(){
        $instrumento = Instrumento1::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento1');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento1($instrumento->visao, $instrumento->acao);
        }
    }
    public function instrumento2()
    {
        $instrumento = Instrumento2::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento2');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento2($instrumento->retorno, $instrumento->retornoOld, $instrumento->cores);
        }
    }
    public function instrumento3()
    {
        $instrumento = Instrumento3::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento3');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento3($instrumento->retorno, $instrumento->diferenca);
        }
    }
    public function instrumento4()
    {
        $instrumento = Instrumento4::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento4');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento4($instrumento->retorno, $instrumento->intervalo, $instrumento->media);
        }
    }
    public function instrumento5()
    {
        $instrumento = Instrumento5::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento5');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento5($instrumento->retorno, $instrumento->intervalo, $instrumento->media);
        }
    }
    public function instrumento6()
    {
        $instrumento = Instrumento6::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento6');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento6($instrumento->att, $instrumento->mediaVolume, $instrumento->mediaProdutividade, $instrumento->desvios);
        }
    }
    public function instrumento7()
    {
        $instrumento = Instrumento7::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento7');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento7($instrumento->pai, $instrumento->adulto, $instrumento->crianca);
        }
    }
    public function instrumento8()
    {
        $instrumento = Instrumento8::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento8');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento8($instrumento->exposicao, $instrumento->feedback);
        }    
    }
    public function instrumento9()
    {
        $instrumento = Instrumento9::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento9');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento9($instrumento->visual, $instrumento->auditivo, $instrumento->cinestesico);
        }    
    }
    public function instrumento10()
    {
        $instrumento = Instrumento10::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento10');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento10($instrumento->total);
        }    
    }
    public function instrumento11()
    {
        $instrumento = Instrumento11::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento11');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento11($instrumento->data);
        }    
    }
    public function instrumento12()
    {
        $instrumento = Instrumento12::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento12');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento12($instrumento->sim, $instrumento->nao, $instrumento->respostas);
        }        
    }
    public function instrumento13()
    {
        $instrumento = Instrumento13::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento13');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento13($instrumento->retorno);
        }   
    }
    public function instrumento14()
    {
        $instrumento = Instrumento14::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento14');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento14($instrumento->resultado, $instrumento->clientes, $instrumento->cores);
        }   
    }
    public function instrumento15()
    {
        return view('instrumento15_1');
    }
    public function instrumento16()
    {
        return view('instrumento16_1');
    }
    public function instrumento17()
    {
        $instrumento = Instrumento17::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento17');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento17($instrumento->hard, $instrumento->soft);
        }   
    }
    public function instrumento18()
    {
        $instrumento = Instrumento18::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento18');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento18($instrumento->a, $instrumento->b, $instrumento->c, $instrumento->d);
        }   
    }
    public function instrumento19()
    {
        $instrumento = Instrumento19::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento19');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento19($instrumento->retorno, $instrumento->ordem);
        }  
    }
    public function instrumento20()
    {
        $instrumento = Instrumento20::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento20');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento20($instrumento->retorno);
        }  
    }

    public function inicioInstrumentos()
    {
        return view('inicioInstrumentos');
    }
    public function diagnostico()
    {
        $teste = 'abc';
        return view('diagnostico1')->with(compact('teste'));
    }
    public function form3()
    {
        return view('form3');
    }
    
    public function form4()
    {
        return view('form4');
    }

    public function slide1(){return view('slide1');}
    public function slide2(){return view('slide2');}
    public function slide3(){return view('slide3');}
    public function slide4(){return view('slide4');}
    public function slide6(){return view('slide6');}
    public function slide22(){return view('slide22');}
    
    

    public function capa()
    {
        return view('capa');
    }

    public function loginDemo()
    {
        return view('login_demo');
    }
    
    public function manualIntro()
    {
        return view('manual_intro');
    }
    
    public function manual()
    {
        return view('manual');
    }

    public function manual1()
    {
        return view('manual1');
    }

    public function manual2(){
        return view('manual2');
    }
    
    public function manual3(){
        return view('manual3');
    }
    public function manual4(){
        return view('manual4');
    }
    public function introAcompanhamento(){
        return view('introAcompanhamento');
    }
    public function autogestao($instrum = null){
        // dd($inst);
        return view('autogestao')->with(compact('instrum'));
    }
    public function gestao1($inst){
        // dd($instrumento);
        $titles = [
        'Meu Nível de Empreendedorismo',
        'Meus problemas prioritários para Aumentar as Vendas',
        'Meu perfil como profissional de Vendas',
        'Meu conhecimento da linha de produtos que vendo',
        'Meu conhecimento dos produtos concorrentes',
        'Matriz para aumentar minha Produtividade nas Vendas',
        'Gerenciamento do relacionamento através dos Estados do Ego.',
        'Gerenciamento do relacionamento através da Exposição e do Feedback',
        'Gerenciamento do relacionamento utilizando os Canais Neurolinguísticos',
        'Gerenciamento do relacionamento através da Inteligência Emocional',
        'Definição do perfil do Cliente Ideal ',
        'Como fazer a Prospecção de Clientes',
        'Qualificação dos Clientes Potenciais (Prospects)',
        'Matriz para identificar Clientes Prioritários',
        'Desenvolvimento da Quantidade e Qualidade dos meus Argumentos de Vendas (Forças Propulsoras)',
        'Neutralização dos Obstáculos da Venda(Forças Restritivas)',
        'Técnicas de Fechamento de Vendas',
        'O Funil de Vendas, com objetivos e métricas de avanço. ',
        'Planos de Ação quantitativos para alcançar as Metas de Vendas',
        'O Relatório de Progresso'
        ];

        $instrumento[0] = $inst;
        $instrumento[1] = "INSTRUMENTO {$instrumento[0]}";
        $instrumento[2] = $titles[$instrumento[0]-1];
        // dd($instrumento);
        return view('gestao1')->with(compact('instrumento'));
    }
}
