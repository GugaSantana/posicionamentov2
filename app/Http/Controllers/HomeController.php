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
use App\AutoGestao;
use App\Instrumento15;
use App\Instrumento16;
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
            return $instrumentoController->instrumento11($instrumento);
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
        $instrumento = Instrumento15::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento15_1');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento15($instrumento->frequencia, $instrumento->argumentos, $instrumento->total);
        }   
    }
    public function instrumento16()
    {
        $instrumento = Instrumento16::where('user_id', Auth::User()->id)->first();
        if(empty($instrumento) || Auth::User()->role_id == 1){
            return view('instrumento16_1');
        }
        else{
            $instrumentoController = new InstrumentoController();
            return $instrumentoController->instrumento16($instrumento->frequencia);
        }
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
            return $instrumentoController->instrumento18($instrumento);
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
    
    public function menu(){return view('menu');}

    

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
        $instrumentosFinalizados = Auth::user()->getInstrumentos();
        $autogestao = Auth::user()->autoGestao()->get();
        return view('autogestao')->with(compact('instrum', 'instrumentosFinalizados', 'autogestao'));
    }
    public function planoacao($inst){
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

        $autogestao = Auth::user()->autoGestao()->where('instrumento', $inst)->first();

        if($inst == 19){
            if(empty($autogestao)){
                $newAutoGestao = new AutoGestao();
                $newAutoGestao->user_id = Auth::user()->id;
                $newAutoGestao->instrumento = $inst;  
                $newAutoGestao->oque = $this->tableInst19();  
                $newAutoGestao->save();
                $autogestao = Auth::user()->autoGestao()->where('instrumento', $inst)->first();
            }
            else if(empty($autogestao->oque)){
                $autogestao->oque = $this->tableInst19();
                $autogestao->save();
            }
            // dd($autogestao);
        }
        // dd($instrumento);
        return view('planoacao')->with(compact('instrumento', 'autogestao'));
    }

    public function tableInst19(){
        return '<p>                <b>Objetivo:&nbsp;</b></p><p><b><br></b></p><p>              </p><div ccp_infra_version="3" ccp_infra_timestamp="1600902742513" ccp_infra_user_hash="316052948" ccp_infra_copy_id="59c64666-47b7-4aa4-a660-2aef13918464" data-ccp-timestamp="1600902742513" style="font-size: medium; text-align: start;"><table width="1450" style="width: 1088pt;"><colgroup><col width="28" style="width: 21pt;"><col width="125" style="width: 94pt;"><col width="136" style="width: 102pt;"><col width="185" style="width: 139pt;"><col width="160" span="5" style="width: 120pt;"><col width="176" style="width: 132pt;"></colgroup><tbody><tr height="35" style="height: 26.25pt;"><td colspan="10" width="1450" height="35" class="xl81" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 18pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: bottom; border-top: 0.5pt solid windowtext; border-right: none; border-bottom: 0.5pt solid windowtext; border-left: 0.5pt solid windowtext; border-image: initial; white-space: nowrap; text-align: center; background: rgb(235, 241, 222); width: 1088pt; height: 26.25pt;">Planilha 5w2h</td></tr><tr height="26" style="height: 19.5pt;"><td colspan="2" width="153" height="26" class="xl35" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: none; white-space: nowrap; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 115pt; height: 19.5pt;"></td><td width="136" class="xl52" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: middle; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: 0.5pt solid windowtext; border-image: initial; text-align: center; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 102pt;">O Que fazer</td><td width="185" class="xl52" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: middle; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: 0.5pt solid windowtext; border-image: initial; text-align: center; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 139pt;">Quando será feito</td><td width="160" class="xl52" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: middle; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: 0.5pt solid windowtext; border-image: initial; text-align: center; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;">Quem fará</td><td width="160" class="xl52" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: middle; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: 0.5pt solid windowtext; border-image: initial; text-align: center; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;">Porque isto será feito</td><td width="160" class="xl52" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: middle; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: 0.5pt solid windowtext; border-image: initial; text-align: center; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;">Onde será feito</td><td width="160" class="xl52" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: middle; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: 0.5pt solid windowtext; border-image: initial; text-align: center; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;">Como será feito</td><td width="160" class="xl52" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: middle; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: 0.5pt solid windowtext; border-image: initial; text-align: center; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;">Quanto custará fazer</td><td class="xl53" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: bottom; border-top: 0.5pt solid windowtext; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: none; border-image: initial; white-space: nowrap; text-align: center; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"></td></tr><tr height="20" style="height: 15pt;"><td width="28" height="20" class="xl41" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; color: white; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; background: rgb(15, 36, 62); width: 21pt; height: 15pt;">N°</td><td class="xl43" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; color: white; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: none; white-space: nowrap; text-align: center; background: rgb(15, 36, 62);">Descrição</td><td class="xl36" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; color: white; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: bottom; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: none; border-left: 0.5pt solid windowtext; border-image: initial; white-space: nowrap; text-align: center; background: rgb(15, 36, 62);">What</td><td class="xl36" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; color: white; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: bottom; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: none; border-left: 0.5pt solid windowtext; border-image: initial; white-space: nowrap; text-align: center; background: rgb(15, 36, 62);">When</td><td class="xl36" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; color: white; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: bottom; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: none; border-left: 0.5pt solid windowtext; border-image: initial; white-space: nowrap; text-align: center; background: rgb(15, 36, 62);">Who</td><td class="xl36" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; color: white; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: bottom; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: none; border-left: 0.5pt solid windowtext; border-image: initial; white-space: nowrap; text-align: center; background: rgb(15, 36, 62);">Why</td><td class="xl36" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; color: white; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: bottom; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: none; border-left: 0.5pt solid windowtext; border-image: initial; white-space: nowrap; text-align: center; background: rgb(15, 36, 62);">Where</td><td class="xl36" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; color: white; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: bottom; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: none; border-left: 0.5pt solid windowtext; border-image: initial; white-space: nowrap; text-align: center; background: rgb(15, 36, 62);">How</td><td class="xl36" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; color: white; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: bottom; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: none; border-left: 0.5pt solid windowtext; border-image: initial; white-space: nowrap; text-align: center; background: rgb(15, 36, 62);">How Much</td><td class="xl36" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; color: white; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: bottom; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: none; border-left: 0.5pt solid windowtext; border-image: initial; white-space: nowrap; text-align: center; background: rgb(15, 36, 62);">Conclusões</td></tr><tr height="44" style="height: 33pt;"><td rowspan="3" width="28" height="138" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 21pt; height: 103.5pt;">1</td><td rowspan="3" width="125" height="138" class="xl84" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: middle; border-top: 0.5pt solid windowtext; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: none; border-image: initial; text-align: center; width: 94pt; height: 103.5pt;"></td><td width="136" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 102pt;"></td><td width="185" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 139pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="176" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 132pt;"></td></tr><tr height="46" style="height: 34.5pt;"><td width="136" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 102pt;"></td><td width="185" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 139pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="176" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 132pt;"></td></tr><tr height="48" style="height: 36pt;"><td width="136" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 102pt;"></td><td width="185" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 139pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="160" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 120pt;"></td><td width="176" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 132pt;"></td></tr><tr height="47" style="height: 35.25pt;"><td rowspan="3" width="28" height="134" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 21pt; height: 100.5pt;">2</td><td rowspan="3" width="125" height="134" class="xl84" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: middle; border-top: 0.5pt solid windowtext; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: none; border-image: initial; text-align: center; width: 94pt; height: 100.5pt;"></td><td width="136" class="xl75" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; width: 102pt;"></td><td width="185" class="xl76" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: 0.5pt solid windowtext; border-image: initial; width: 139pt;"></td><td width="160" class="xl76" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: 0.5pt solid windowtext; border-image: initial; width: 120pt;"></td><td width="160" class="xl76" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: 0.5pt solid windowtext; border-image: initial; width: 120pt;"></td><td width="160" class="xl76" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: 0.5pt solid windowtext; border-image: initial; width: 120pt;"></td><td width="160" class="xl76" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border-top: none; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: 0.5pt solid windowtext; border-image: initial; width: 120pt;"></td><td class="xl17" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: 0.5pt solid windowtext; white-space: nowrap;"></td><td class="xl17" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: 0.5pt solid windowtext; white-space: nowrap;"></td></tr><tr height="46" style="height: 34.5pt;"><td width="136" class="xl75" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; width: 102pt;"></td><td width="185" class="xl75" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; width: 139pt;"></td><td width="160" class="xl75" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; width: 120pt;"></td><td width="160" class="xl75" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; width: 120pt;"></td><td width="160" class="xl75" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; width: 120pt;"></td><td width="160" class="xl75" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; width: 120pt;"></td><td class="xl17" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: 0.5pt solid windowtext; white-space: nowrap;"></td><td class="xl17" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: 0.5pt solid windowtext; white-space: nowrap;"></td></tr><tr height="41" style="height: 30.75pt;"><td width="136" class="xl75" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; width: 102pt;"></td><td width="185" class="xl75" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; width: 139pt;"></td><td width="160" class="xl75" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; width: 120pt;"></td><td width="160" class="xl75" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; width: 120pt;"></td><td width="160" class="xl75" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; width: 120pt;"></td><td width="160" class="xl75" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; width: 120pt;"></td><td class="xl17" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: 0.5pt solid windowtext; white-space: nowrap;"></td><td class="xl17" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: 0.5pt solid windowtext; white-space: nowrap;"></td></tr><tr height="41" style="height: 30.75pt;"><td width="28" height="41" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 21pt; height: 30.75pt;">3</td><td width="125" class="xl40" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: middle; border-top: 0.5pt solid windowtext; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: none; border-image: initial; text-align: center; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 94pt;"></td><td width="136" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 102pt;"></td><td width="185" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 139pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td class="xl17" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: 0.5pt solid windowtext; white-space: nowrap;"></td><td class="xl17" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: 0.5pt solid windowtext; white-space: nowrap;"></td></tr><tr height="41" style="height: 30.75pt;"><td width="28" height="41" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 21pt; height: 30.75pt;">4</td><td width="125" class="xl40" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: middle; border-top: 0.5pt solid windowtext; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: none; border-image: initial; text-align: center; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 94pt;"></td><td width="136" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 102pt;"></td><td width="185" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 139pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td class="xl17" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: 0.5pt solid windowtext; white-space: nowrap;"></td><td class="xl17" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: 0.5pt solid windowtext; white-space: nowrap;"></td></tr><tr height="41" style="height: 30.75pt;"><td width="28" height="41" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 21pt; height: 30.75pt;">5</td><td width="125" class="xl40" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: middle; border-top: 0.5pt solid windowtext; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: none; border-image: initial; text-align: center; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 94pt;"></td><td width="136" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 102pt;"></td><td width="185" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 139pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td class="xl17" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: 0.5pt solid windowtext; white-space: nowrap;"></td><td class="xl17" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: 0.5pt solid windowtext; white-space: nowrap;"></td></tr><tr height="41" style="height: 30.75pt;"><td width="28" height="41" class="xl42" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; text-align: center; width: 21pt; height: 30.75pt;">6</td><td width="125" class="xl40" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-weight: 700; font-family: Calibri, sans-serif; vertical-align: middle; border-top: 0.5pt solid windowtext; border-right: 0.5pt solid windowtext; border-bottom: 0.5pt solid windowtext; border-left: none; border-image: initial; text-align: center; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 94pt;"></td><td width="136" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 102pt;"></td><td width="185" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 139pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td width="160" class="xl33" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: middle; border: 0.5pt solid windowtext; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; width: 120pt;"></td><td class="xl17" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: 0.5pt solid windowtext; white-space: nowrap;"></td><td class="xl17" style="padding-top: 1px; padding-right: 1px; padding-left: 1px; font-size: 11pt; font-family: Calibri, sans-serif; vertical-align: bottom; border: 0.5pt solid windowtext; white-space: nowrap;"></td></tr></tbody></table></div>';
    }
    public function planoacaoEdit(Request $request){
        $autogestao = AutoGestao::where('user_id', Auth::user()->id)
            ->where('instrumento', $request['instrumento'])            
            ->first();
        if(empty($autogestao)){
            $newAutoGestao = new AutoGestao();
            $newAutoGestao->user_id = Auth::user()->id;
            $newAutoGestao->instrumento = $request['instrumento'];
            $newAutoGestao->oque = $request['oque'];
            $newAutoGestao->como = $request['como'];
            $newAutoGestao->quando = $request['quando'];
            if($request['acao'] == 'finish'){
                $newAutoGestao->a = true;
            }
            $newAutoGestao->save();
        }
        else{
            $autogestao->oque = $request['oque'];
            $autogestao->como = $request['como'];
            $autogestao->quando = $request['quando'];
            if($request['acao'] == 'finish'){
                $autogestao->a = true;
            }

            $autogestao->save();
        }

        return redirect()->route('autogestao');
    }

    public function savePlanoAcaoOque(Request $request){
        $autogestao = AutoGestao::where('user_id', Auth::user()->id)
            ->where('instrumento', $request['instrumento'])            
            ->first();
        if(empty($autogestao)){
            $newAutoGestao = new AutoGestao();
            $newAutoGestao->user_id = Auth::user()->id;
            $newAutoGestao->instrumento = $request['instrumento'];
            $newAutoGestao->oque = $request['oque'];
            $newAutoGestao->como = '';
            $newAutoGestao->quando = '';
            
            $newAutoGestao->save();
        }
        else{
            $autogestao->oque = $request['oque'];
            $autogestao->save();
        }

        return 1;
    }

    public function savePlanoAcaoComo(Request $request){
        $autogestao = AutoGestao::where('user_id', Auth::user()->id)
            ->where('instrumento', $request['instrumento'])            
            ->first();
        if(empty($autogestao)){
            $newAutoGestao = new AutoGestao();
            $newAutoGestao->user_id = Auth::user()->id;
            $newAutoGestao->instrumento = $request['instrumento'];
            $newAutoGestao->oque ='';
            $newAutoGestao->como =  $request['como'];
            $newAutoGestao->quando = '';
            
            $newAutoGestao->save();
        }
        else{
            $autogestao->como = $request['como'];
            $autogestao->save();
        }

        return 1;
    }

    public function savePlanoAcaoQuando(Request $request){
        $autogestao = AutoGestao::where('user_id', Auth::user()->id)
            ->where('instrumento', $request['instrumento'])            
            ->first();
        if(empty($autogestao)){
            $newAutoGestao = new AutoGestao();
            $newAutoGestao->user_id = Auth::user()->id;
            $newAutoGestao->instrumento = $request['instrumento'];
            $newAutoGestao->oque ='';
            $newAutoGestao->como = '';
            $newAutoGestao->quando = $request['quando'];
            
            $newAutoGestao->save();
        }
        else{
            $autogestao->quando = $request['quando'];
            $autogestao->save();
        }

        return 1;
    }



    public function confirmEtapa($instrumento, $etapa){
        $autogestao = AutoGestao::where('user_id', Auth::user()->id)
            ->where('instrumento', $instrumento)            
            ->first();
        $autogestao->$etapa = true;
        $autogestao->save();
        return redirect()->route('autogestao');
    }
}
