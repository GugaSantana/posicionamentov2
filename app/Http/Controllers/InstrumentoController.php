<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Instrumento1;
use App\Instrumento2;
use App\Instrumento3;
use App\Instrumento4;
use App\Instrumento5;
use App\Instrumento6;
use App\Instrumento7;
use App\Instrumento8;
use App\Instrumento9;
use App\Instrumento10;
use App\Instrumento11;
use App\Instrumento12;
use App\Instrumento13;
use App\Instrumento14;
use App\Instrumento15;
use App\Instrumento16;
use App\Instrumento17;
use App\Instrumento18;
use App\Instrumento19;
use App\Instrumento20;
use App\UserInstrumento;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class InstrumentoController extends Controller
{
    public function requestInstrumento1(Request $request){
        //dd($request);
        $soma = 0;
        for($i = 1; $i <= 10; $i++){
            if($request["radio{$i}"] == "Y") $soma++;
        }

        $visao = $soma;
        $acao = $request['radioPt2'];


        if($visao >= 8){
            if($acao <= 3){
                $quadrante = 1;
            }
            else if($acao > 3 && $acao <= 7){
                $quadrante = 2;
            }
            else if($acao >7){
                $quadrante = 3;
            }
        }
        if($visao < 8 && $visao >= 3){
            if($acao <= 3){
                $quadrante = 4;
            }
            else if($acao > 3 && $acao <= 7){
                $quadrante = 5;
            }
            else if($acao > 7){
                $quadrante = 6;
            }
        } 
        if($visao < 3){
            if($acao <= 3){
                $quadrante = 7;
            }
            else if($acao > 3 && $acao <= 7){
                $quadrante = 8;
            }
            else if($acao >7){
                $quadrante = 6;
            }
        }

        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'visao' => $visao,
            'acao' => $acao,
            'quadrante' => $quadrante,
            'done' =>true
        ];
        if(Auth::User()->role_id != 1){
            Instrumento1::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 1]);
        }

        return $this->instrumento1($visao, $acao);
    }

    public function instrumento1($visao, $acao){
        if($visao >= 8){
            if($acao <= 3){
                //3
                $retorno['titulo'] = "Visão Alta - Ação Baixa";
                $retorno['diagnostico'] = "<p class='fonte18'>Você apresenta uma Visão clara e bem definida, você sabe o que quer, onde quer chegar, porém carece de determinação para por em prática sua visão, para implementá-la.</p>
                <p class='fonte18'>Do ponto de vista da ação sua postura é muito passiva.</p> 
                <p class='fonte18'>Caracterizamos esta posição como a posição de um <b>SONHADOR</b></p>";
                $retorno['recomendacao'] = "<p class='fonte18'>Sua Visão está bem estruturada, ela é forte porem deve ser operacionalizada, deve ser levada à pratica.</p>
                <p class='fonte18'>Para isto você necessita de Ação. Ação é basicamente tomar e implementar decisões, preferencialmente respaldado por uma metodologia.</p>
                <p class='fonte18'>Você encontrará nas recomendações do Instrumento 19 desta Metodologia, um Plano de Ação Estruturado, inclusive com um formulário próprio que apresenta instruções especificas que você deverá implementar.</p>
                <p class='fonte18'>Mas além da metodologia, você necessita de motivação e você pode extrair essa motivação da sua Visão, pois a Ação é um meio para fazer da sua Visão uma realidade</p>";
            }
            else if($acao > 3 && $acao <= 7){
                $retorno['titulo'] = "Visão Alta - Ação Média";
                $retorno['diagnostico'] = "<p class='fonte18'>Você tem uma Visão clara e bem desenvolvida, sabe aonde quer chegar, porém a capacidade de agir e de tomar e implementar decisões para a realização de sua Visão não apresenta a mesma força ou intensidade. É a posição própria dos <b>INVENTORES</b>.</p>
                <p class='fonte18'>Desenvolvendo o eixo da Ação você tem um enorme potencial para aumentar sua produtividade e seus resultados profissionais.</p>";
                $retorno['recomendacao'] = "<p class='fonte18'>Mantenha o comprometimento com sua Visão; sua Visão pode ser impactada por suas experiências e pelas mudanças do meio que você está inserido.</p>
                <p class='fonte18'>Em relação à Ação, você deve dar a elas mais contexto estratégico, relacionando-as e ajustando-as à sua visão que é clara e bem estruturada.</p>
                <p class='fonte18'>Em relação a Ação procure agir com método, com técnica para evitar a dispersão. Utilize o Instrumento 19 – Plano de Ação. Não perca a oportunidade de levar à prática sua Visão. Isto vai lhe trazer muitas satisfações profissionais.</p>";
            }
            else if($acao >7){
                //1
                $retorno['titulo'] = "Visão Alta - Ação Alta";
                $retorno['diagnostico'] = "<p class='fonte18'>Você tem uma visão clara e bem desenvolvida, sabe aonde quer chegar e tem capacidade de agir e de tomar e implementar decisões para a realização de sua Visão.</p>
                <p class='fonte18'>Caracterizamos sua posição como sendo uma posição <b>EMPREENDEDORA</b></p>";
                $retorno['recomendacao'] = "<p class='fonte18'>Você esta na posição ideal do Modelo apresentando Visão clara e estruturada e mostra disposição para a Ação.</p>
                <p class='fonte18'>A recomendação é manter e sustentar esta posição.</p>
                <p class='fonte18'>Para isto, reflita e mantenha atualizada sua visão. Aumente seu comprometimento com ela, não se acomode, sua Visão pode ser impactada por suas experiências e pelas mudanças do meio em que você está inserido. </p>
                <p class='fonte18'>E quanto à Ação, procure mantê-la atrelada e não dissociada da Visão. Pergunte-se se as ações que você empreende, a forma em que você trabalha contribui para a realização da Visão. </p>
                <p class='fonte18'>Basicamente você tem que controlar que as duas dimensões Visão/Ação continuem articuladas: </p>
                <p class='fonte18'>É um trabalho de <b>Manutenção</b></p>";
            }
        }
        if($visao < 8 && $visao >= 3){
            if($acao <= 3){
                $retorno['titulo'] = "Visão Média - Ação Baixa";
                $retorno['diagnostico'] = "<p class='fonte18'>Sua Visão está relativamente estruturada, porém ainda não tem força para motivar sua Ação.</p>
                <p class='fonte18'>Esta pode ser a causa do seu nível baixo de Ação. Esta combinação de Visão e Ação compromete sua produtividade, que, como conseqüência, é baixa, mas ao mesmo tempo representa grande oportunidade de desenvolver sua produtividade e alcançar extraordinários resultados.</p>";
                $retorno['recomendacao'] = " <p class='fonte18'>De acordo com seu diagnóstico você tem que definir e estruturar ainda mais sua Visão e aumentar seu nível de Ação.</p>
                <p class='fonte18'>Para desenvolver sua Visão, pense e reflita o que você quer para seu futuro, onde você gostaria de chegar. Sonhe o que é ideal para seu futuro, pense no seu Plano de Vida, defina objetivos estratégicos.</p>
                <p class='fonte18'>A Visão se desenvolve quando você busca um objetivo maior para sua vida, e nessa “razão de ser” você insere seus objetivos profissionais. Pergunte-se: qual é a minha missão nessa vida, onde eu quero chegar, o que me faz realmente feliz? Isto não é auto-ajuda, isto é ter uma estratégia para a vida.</p>
                <p class='fonte18'>Até a Medicina Pós Genômica, a mais avançada que existe, recomenda esta postura perante a vida para prevenir doenças!</p>
                <p class='fonte18'>Em relação à Ação, procure agir com método, com técnica, para evitar a dispersão. Utilize o instrumento 19 – Plano de Ação porque ele permite estruturar as atividades que devem ser desenvolvidas para aumentar a produtividade de suas ações.</p>
                <p class='fonte18'>Implemente estas recomendações e você verificará uma mudança significativa nos seus resultados e alcançará com mais facilidade suas metas de venda</p>";
            }
            else if($acao > 3 && $acao <= 7){
                //4
                $retorno['titulo'] = "Visão Média - Ação Média";
                $retorno['diagnostico'] = "<p class='fonte18'>Você apresenta uma Visão não muito clara, não muito estruturada, ela existe, mas não está suficientemente desenvolvida ou elaborada.</p>
                <p class='fonte18'>Sua energia e determinação para a ação, para implementar decisões tomadas apresenta um nível intermediário.</p>
                <p class='fonte18'>Seu resultado o coloca na posição do <b>MEIO TERMO</b></p>";
                $retorno['recomendacao'] = "<p class='fonte18'>A recomendação conforme o resultado do seu diagnóstico consiste em estruturar, em desenvolver mais, tanto sua Visão como sua Ação.</p>
                <p class='fonte18'>Você poderá alcançar objetivos estratégicos aplicando o Plano de Ação proposto no Instrumento 19 – Planos de Ação Quantitativos para alcançar Metas de Vendas.</p>
                <p class='fonte18'>Quando você receber as recomendações do Instrumento 19, você poderá aplicar um formulário específico para estruturar e operacionalizar sua Visão</p>
                <p class='fonte18'>Este plano de ação também pode ser aplicado para seus objetivos de vida, não apenas para seus objetivos profissionais.</p>
                <p class='fonte18'>Em relação à Ação, utilize e implemente o mesmo instrumento 19 porque ele permite estruturar as atividades que devem ser desenvolvidas e aumentar sua motivação para energizar sua Visão e suas Ações. </p>
                <p class='fonte18'>Desenvolva sua Visão e atrele suas ações à sua Visão, como um meio para alcançá-la</p>";
            }
            else if($acao > 7){
                $retorno['titulo'] = "Visão Média - Ação Alta";
                $retorno['diagnostico'] = "<p class='fonte18'>Você apresenta uma Visão não muito clara, não muito estruturada, ela existe, mas não está suficientemente desenvolvida ou elaborada.</p>
                <p class='fonte18'>O nível de Ação alto significa tendência a uma atividade intensa, porém não muito associada a sua Visão, o que leva a que suas decisões e atividades não tenham um contexto estratégico.</p>
                <p class='fonte18'>Esta é uma posição própria de uma ação Gerencial, um perfil gerencial.</p>
                <p class='fonte18'>Você tem um enorme espaço para melhorar seus resultados e aumentar sua produtividade, desenvolvendo os 2 eixos do modelo.</p>";
                $retorno['recomendacao'] = "<p class='fonte18'>Seu nível de Ação é excelente, mas você tem que desenvolver a força de sua Visão, ela deve estar mais clara e estruturada. Para desenvolver a Visão pense e reflita sobre o que você quer para seu futuro, onde você gostaria de chegar.</p>
                <p class='fonte18'>Sonhe o que é ideal para seu futuro, pense no seu Plano de Vida e defina objetivos estratégicos.</p>
                <p class='fonte18'>Você poderá alcançar objetivos estratégicos aplicando o Plano de Ação proposto no Instrumento 19.</p>
                <p class='fonte18'>A Visão se desenvolve quando você busca um objetivo maior para sua vida e nessa 'razão de ser' você insere seus objetivos profissionais.</p>
                <p class='fonte18'>Feito isto, procure manter a Ação atrelada e não dissociada da Visão. Pergunte-se se as ações que você empreende, a forma em que você trabalha, contribui para a realização da Visão.</p>
                <p class='fonte18'>Basicamente você tem que controlar que as duas dimensões Visão/Ação estejam articuladas e com alto nível de desempenho.</p>";
            }
        } 
        if($visao < 3){
            if($acao <= 3){
                //2
                $retorno['titulo'] = "Visão Baixa - Ação Baixa";
                $retorno['diagnostico'] = "<p class='fonte18'>Você não apresenta uma Visão clara e estruturada, o que significa que suas decisões e ações tendem a ser tomadas focalizando o curto prazo, sem contexto estratégico. Visão baixa leva ao imediatismo. Ação baixa significa ter pouca energia para desenvolver trabalhos, assumindo posturas mais contemplativas. É uma posição de <b>APATIA</b></p>";
                $retorno['recomendacao'] = "<p class='fonte18'>Você tem que desenvolver sua Visão e energizar sua Ação.</p>
                <p class='fonte18'>Para desenvolver sua Visão, pense e reflita o que você quer para seu futuro, onde você gostaria de chegar. Sonhe o que é ideal para seu futuro, pense no seu Plano de Vida, defina objetivos estratégicos.</p>
                <p class='fonte18'>Você poderá alcançar objetivos estratégicos aplicando o Plano de Ação proposto no Instrumento 19 – Planos de Ação Quantitativos para alcançar Metas de Vendas.</p>
                <p class='fonte18'>Quando você receber as recomendações do Instrumento 19, você poderá aplicar um formulário para estruturar e operacionalizar sua Visão.</p>
                <p class='fonte18'>A recomendação conforme o resultado do seu diagnóstico consiste em estruturar, em desenvolver mais sua Visão.</p>
                <p class='fonte18'>O plano de ação também pode ser aplicado para seus objetivos de vida, não apenas para seus objetivos profissionais.</p>
                <p class='fonte18'>Em relação a Ação, utilize o mesmo instrumento (Plano de Ação do Instrumento 19) porque ele permite estruturar as atividades que devem ser desenvolvidas, aumentar sua motivação e para energizar sua Visão e suas Ações. </p>
                <p class='fonte18'>Desenvolva sua Visão e atrele suas ações à sua Visão, como um meio para alcançá-la </p>
                <p class='fonte18'>Você deve dar mais contexto estratégico a suas ações e menos imediatismo, em síntese, você deve aumentar o Poder da Visão e atrelar a ela suas ações.</p>";
            }
            else if($acao > 3 && $acao <= 7){
                $retorno['titulo'] = "Visão Baixa - Ação Média";
                $retorno['diagnostico'] = "<p class='fonte18'>Você não apresenta uma Visão clara e estruturada, o que significa que suas decisões e ações tendem a serem tomadas focalizando o curto prazo, sem contexto estratégico.</p>
                <p class='fonte18'>Visão baixa leva ao imediatismo. Ação média significa ter uma relativa energia e determinação para desenvolver trabalhos.</p>
                <p class='fonte18'>Este perfil lhe dá um enorme espaço para melhorar seus resultados e aumentar sua produtividade, desenvolvendo os 2 eixos do modelo.</p>";
                $retorno['recomendacao'] = "<p class='fonte18'>Você tem que desenvolver sua Visão e energizar sua Ação.</p>
                <p class='fonte18'>Para desenvolver sua Visão, pense e reflita o que você quer para seu futuro, onde você gostaria de chegar. Sonhe o que é ideal para seu futuro, pense no seu Plano de Vida, defina objetivos estratégicos.</p>
                <p class='fonte18'>A Visão se desenvolve quando você busca um objetivo maior para sua vida, e nessa “razão de ser” você insere seus objetivos profissionais. Pergunte-se: qual é a minha missão nessa vida, onde eu quero chegar, o que me faz realmente feliz? Isto não é auto-ajuda, isto é ter uma estratégia para a vida.</p>
                <p class='fonte18'>Até a Medicina Pós Genômica, a mais avançada que existe, recomenda esta postura perante a vida para prevenir doenças!</p>
                <p class='fonte18'>Você poderá alcançar objetivos estratégicos aplicando o Plano de Ação proposto no Instrumento 19 – Planos de Ação Quantitativos para alcançar Metas de Vendas.</p>
                <p class='fonte18'>A recomendação conforme o resultado do seu diagnóstico consiste em estruturar, em desenvolver mais sua Visão.</p>
                <p class='fonte18'>Em relação à Ação procure agir com método, com técnica para evitar a dispersão.</p>
                <p class='fonte18'>Utilize o instrumento 19 (Plano de Ação) porque ele permite estruturar as atividades que devem ser desenvolvidas para aumentar a Produtividade de suas Ações.</p>
                <p class='fonte18'>Desenvolva sua Visão e atrele suas ações à sua Visão, como um meio para alcançá-la</p>
                <p class='fonte18'>Você deve dar mais contexto estratégico a suas ações e menos imediatismo, em síntese, você deve aumentar o Poder da Visão e atrelar a ela suas ações.</p>
                <p class='fonte18'>Implemente estas recomendações e você verificará mudanças significativas nos seus resultados e alcançará com mais facilidades suas metas de vendas.</p>";
            }
            else if($acao >7){
                //5
                $retorno['titulo'] = "Visão Baixa - Ação Alta";
                $retorno['diagnostico'] = "<p class='fonte18'>Você privilegia a ação, e a visão não tem uma estrutura clara e nem definida. Suas ações são táticas e orientadas para o curto prazo.</p>
                <p class='fonte18'>Sua ação não é estratégia, porem você tem energia e determinação para desenvolver atividades.  É a posição do <b>TRABALHADOR</b></p>";
                $retorno['recomendacao'] = "<p class='fonte18'>A recomendação conforme o resultado do seu diagnóstico consiste em estruturar e em desenvolver mais sua Visão.</p>
                <p class='fonte18'>Você poderá alcançar os objetivos estratégicos da Visão aplicando o Plano de Ação proposto no Instrumento 19 – Planos de Ação Quantitativos para alcançar Metas de Vendas.</p>
                <p class='fonte18'>Quando você receber as recomendações do Instrumento 19, você poderá aplicar um formulário especifico para estruturar e operacionalizar sua Visão</p>
                <p class='fonte18'>Este Plano de Ação também pode ser aplicado para seus objetivos de vida, não apenas para seus objetivos profissionais.</p>
                <p class='fonte18'>Em relação à Ação, utilize o mesmo instrumento 19 porque ele permite estruturar as atividades que devem ser desenvolvidas e aumentar a sua motivação para energizar sua Visão e suas Ações. </p>
                <p class='fonte18'>Desenvolva sua Visão e atrele suas Ações à sua Visão, como um meio para alcançá-la </p>
                <p class='fonte18'>Você deve dar mais contexto estratégico a suas ações e ter menos imediatismo.</p>
                <p class='fonte18'>Em síntese, você deve aumentar o Poder da Visão e atrelar a ela suas Ações </p>";
            }
        }

        return view('diagnostico1')->with(compact('retorno','visao','acao'));
        //dd($soma, $pt2);

    }

    public function requestInstrumento2(Request $request){
        // dd($request);
        $problema1 = $request['problema1'];
        $problema2 = $request['problema2'];
        $problema3 = $request['problema3'];
        $problema4 = $request['problema4'];
        $problema5 = $request['problema5'];
        
        $matriz1 = $request['matriz1'];
        $newmatriz1 = 1;
        foreach($matriz1 as $m){
            $newmatriz1 *= $m; 
        }
        $matriz2 = $request['matriz2'];
        $newmatriz2 = 1;
        foreach($matriz2 as $m){
            $newmatriz2 *= $m; 
        }
        $matriz3 = $request['matriz3'];
        $newmatriz3 = 1;
        foreach($matriz3 as $m){
            $newmatriz3 *= $m; 
        }
        $matriz4 = $request['matriz4'];
        $newmatriz4 = 1;
        foreach($matriz4 as $m){
            $newmatriz4 *= $m; 
        }
        $matriz5 = $request['matriz5'];
        $newmatriz5 = 1;
        foreach($matriz5 as $m){
            $newmatriz5 *= $m; 
        }
        $array = [
            $problema1 => $newmatriz1,
            $problema2 => $newmatriz2,
            $problema3 => $newmatriz3,
            $problema4 => $newmatriz4,
            $problema5 => $newmatriz5
        ];
        // dd($array);
        $retornoOld = [$problema1,
        $problema2,
        $problema3,
        $problema4,
        $problema5];
        
        $cores = [
            $problema1 => 'red',
            $problema2 => 'blue',
            $problema3 => 'yellow',
            $problema4 => 'green',
            $problema5 => '#c17d00'
        ];
        
        arsort($array);
        $retorno = $array;

        //Dados para relatório
        $primeiro = $retornoOld[0];
        $i = 1;
        foreach($retorno as $key => $value){
            if($primeiro == $key){
                $desvio_maior = $i;
                break;
            }
            $i++;
        }

        //Verificação de desvio do menos importante
        $primeiro = $retornoOld[4];
        $i = 1;
        foreach($retorno as $key => $value){
            if($primeiro == $key){
                $desvio_menor = $i;
                break;
            }
            $i++;
        }
        
        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'retorno' => $retorno,
            'retornoOld' => $retornoOld,
            'cores' => $cores,
            'desvio_maior' => $desvio_maior,
            'desvio_menor' => $desvio_menor,
            'done' => true,
        ];
        if(Auth::User()->role_id != 1){
            Instrumento2::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 2]);
        }

        return $this->instrumento2($retorno, $retornoOld, $cores);
        // dd(($retornoOld));
    }

    public function instrumento2($retorno, $retornoOld, $cores){
        return view('diagnostico2')->with(compact('retorno','retornoOld', 'cores'));
    }

    public function requestInstrumento3(Request $request){
        for($i = 0; $i < 19; $i++){
            $radio[$i] = $request['radio'.$i];
        }
        for($i = 0; $i < 19; $i++){
            $dif[$i]['questionario'] = $i;
            $dif[$i]['diferenca'] = 10 - $request['radio'.$i];
        }
        $diferenca = new Collection($dif);

        $diferenca = $diferenca->sortByDesc('diferenca')->toArray();
        $retorno = $radio;
        // dd($diferenca);
        // foreach($diferenca as $dif){
        //     dd($dif['questionario']);
        // }

        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'retorno' => $retorno,
            'diferenca' => $diferenca,
            'done' => true
        ];
        if(Auth::User()->role_id != 1){
            Instrumento3::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 3]);
        }

        return $this->instrumento3($retorno, $diferenca);
    }

    public function instrumento3($retorno, $diferenca){
        return view('diagnostico3')->with(compact('retorno', 'diferenca'));
    }

    //========== INSTRUMENTO 4 ==========

    public function requestInstrumento4(Request $request){
        // dd($request);
        $intervalos['1'] = 0;
        $intervalos['2'] = 0;
        $intervalos['3'] = 0;
        $intervalos['4'] = 0;
        $soma = 0;
        
        for($i = 0; $i < 10; $i++){
            $retorno[$i]['valor'] = $request['radio'.($i+1)];
            $retorno[$i]['produto'] = $request['produto'.($i+1)];
            $soma += $retorno[$i]['valor'];

            if($retorno[$i]['valor'] == 1 || $retorno[$i]['valor'] == 2){
                $intervalos['1']++;
            }
            else if($retorno[$i]['valor'] >= 3 && $retorno[$i]['valor'] <= 5){
                $intervalos['2']++;
            }
            else if($retorno[$i]['valor'] >= 6 && $retorno[$i]['valor'] <= 8){
                $intervalos['3']++;
            }
            else{
                $intervalos['4']++;
            }
        }

        $media = round($soma / 10);

        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'retorno' => $retorno,
            'intervalo' => $intervalos,
            'media' => $media,
            'done' => true
        ];
        if(Auth::User()->role_id != 1){
            Instrumento4::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 4]);
        }

        return $this->instrumento4($retorno, $intervalos, $media);
    }

    public function instrumento4($retorno, $intervalos, $media){
        return view('diagnostico4')->with(compact('retorno', 'intervalos', 'media'));
    }

    //========== INSTRUMENTO 5 ==========

    public function requestInstrumento5(Request $request){
        // dd($request);
        $intervalos['1'] = 0;
        $intervalos['2'] = 0;
        $intervalos['3'] = 0;
        $intervalos['4'] = 0;
        $soma = 0;
        
        for($i = 0; $i < 10; $i++){
            $retorno[$i]['valor'] = $request['radio'.($i+1)];
            $retorno[$i]['produto'] = $request['produto'.($i+1)];
            $soma += $retorno[$i]['valor'];

            if($retorno[$i]['valor'] == 1 || $retorno[$i]['valor'] == 2){
                $intervalos['1']++;
            }
            else if($retorno[$i]['valor'] >= 3 && $retorno[$i]['valor'] <= 5){
                $intervalos['2']++;
            }
            else if($retorno[$i]['valor'] >= 6 && $retorno[$i]['valor'] <= 8){
                $intervalos['3']++;
            }
            else{
                $intervalos['4']++;
            }
        }

        $media = round($soma / 10);
        // dd($retorno);
        
        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'retorno' => $retorno,
            'intervalo' => $intervalos,
            'media' => $media,
            'done' => true
        ];
        if(Auth::User()->role_id != 1){
            Instrumento5::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 5]);
        }

        return $this->instrumento5($retorno, $intervalos, $media);
    }

    public function instrumento5($retorno, $intervalos, $media){
        return view('diagnostico5')->with(compact('retorno', 'intervalos', 'media'));
    }

    //========== INSTRUMENTO 6 ==========

    public function requestInstrumento6(Request $request){
        //dd($request);
        $totalVolume = 0;
        $totalProdutividade = 0;
        $totalObjetivo = 0;
        $count = 0;
        for($i=0;$i<8;$i++){
            $att[$i]['atividade'] = $request['atividade'.$i];
            $att[$i]['percentualTempo'] = $request['percentualTempo'.$i];
            // dd($request["percentualTempo0-{$i}"]);
            $att[$i]['subtotalA'] = (int)$request["percentualTempo0-{$i}"] + (int)$request["percentualTempo1-{$i}"] + (int)$request["percentualTempo2-{$i}"] + (int)$request["percentualTempo3-{$i}"];
            $att[$i]['subtotalA'] *= 2;

            $att[$i]['subtotalB'] = (int)$request["percentualTempomedia0-{$i}"] + (int)$request["percentualTempomedia1-{$i}"] + (int)$request["percentualTempomedia2-{$i}"] + (int)$request["percentualTempomedia3-{$i}"];
            $att[$i]['subtotal'] = $att[$i]['subtotalA'] + $att[$i]['subtotalB'];
            $att[$i]['indiceRetorno'] = 0;
            if($att[$i]['percentualTempo'] != 0){
                $att[$i]['indiceRetorno'] = number_format($att[$i]['subtotal'] / $att[$i]['percentualTempo'], 1);
            }
            
            $totalVolume += $att[$i]['subtotal'];
            $totalProdutividade += $att[$i]['indiceRetorno'];
            
            //Objetivos
            $obj[$i]['total'] = 0;
            
            if($i < 4){
                $obj[$i]['objetivo'] = $request['objetivo'.$i];
                
                for ($j = 0; $j < 8; $j++) {
                    $obj[$i]['total'] += $request['percentualTempo'.$i.'-'.$j];
                }
                $obj[$i]['total'] *= 2;
            }
            else{
                $aux = $i - 4;
                $obj[$i]['objetivo'] = $request['objetivomedia'.$aux];
            
                for ($j = 0; $j < 8; $j++) {
                    $obj[$i]['total'] += $request['percentualTempomedia'.$aux.'-'.$j];
                }
            }            
            
            $totalObjetivo += $obj[$i]['total'];
            
            $count++;
        }

        //ponderados
        for($i=0;$i<8;$i++){
            if($totalObjetivo == 0) $totalObjetivo = 1;
            $obj[$i]['ponderado'] = $obj[$i]['total'] * 100 / $totalObjetivo;
        }

        for($i=0;$i<8;$i++){
            if($i<4){
                $desvios[$i]['objetivo'] = $obj[$i]['objetivo'];
                $desvios[$i]['valor'] = $obj[$i]['ponderado'] - $request['pesoobjetivo'.$i];
            }
            else{
                $aux = $i - 4;
                $desvios[$i]['objetivo'] = $obj[$i]['objetivo'];
                $desvios[$i]['valor'] = $obj[$i]['ponderado'] - $request['pesoobjetivomedia'.$aux];
            }
        }

        $attributes = [];
        foreach($att as $at){
            if(!empty($at['atividade'])){
                $attributes[] = $at;
            }
        }
        
        $mediaVolume = $totalVolume / count($attributes);
        $mediaProdutividade = $totalProdutividade / count($attributes);
        
        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'att' => $attributes,
            'desvios' => $desvios,
            'mediaVolume' => $mediaVolume,
            'mediaProdutividade' => $mediaProdutividade,
            'done' => true
        ];
        
        if(Auth::User()->role_id != 1){
            Instrumento6::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 6]);
        }

        return $this->instrumento6($attributes, $mediaVolume, $mediaProdutividade, $desvios);
    }

    public function instrumento6($att, $mediaVolume, $mediaProdutividade, $desvios){
        $att = new Collection($att);
        return view('diagnostico6')->with(compact('att', 'mediaVolume', 'mediaProdutividade', 'desvios'));
    }

    //========== INSTRUMENTO 7 ==========

    public function requestInstrumento7(Request $request){
        $pai = $adulto = $crianca = 0;
        for($i = 1; $i <= 18; $i++){
            $pai += $request["pai{$i}"];
            $adulto += $request["adulto{$i}"];
            $crianca += $request["crianca{$i}"];
        }

        //Tabela de conversão
        $convPai = [
            90 => 76,
            85 => 72,
            80 => 63,
            75 => 46,
            70 => 33,
            65 => 26,
            60 => 23,
            55 => 18,
            50 => 15,
            45 => 11,
            40 => 8,
            35 => 5,
            30 => 3,
            25 => 2,
            20 => 1
        ];

        $convAdulto = [
            90 => 90,
            85 => 90,
            80 => 90,
            75 => 86,
            70 => 81,
            65 => 76,
            60 => 70,
            55 => 64,
            50 => 57,
            45 => 50,
            40 => 44,
            35 => 36,
            30 => 28,
            25 => 19,
            20 => 10
        ];

        $convCrianca = [
            90 => 80,
            85 => 74,
            80 => 65,
            75 => 47,
            70 => 38,
            65 => 32,
            60 => 27,
            55 => 22,
            50 => 18,
            45 => 13,
            40 => 9,
            35 => 6,
            30 => 3,
            25 => 2,
            20 => 1
        ];

        $retPai = $retAdulto = $retCrianca = 20;
        
        foreach($convPai as $perc => $value){
            if($pai >= $value){
                $retPai = $perc;
                break;
            }
        }
        
        foreach($convAdulto as $perc => $value){
            if($adulto >= $value){
                $retAdulto = $perc;
                break;
            }
        }

        foreach($convCrianca as $perc => $value){
            if($crianca >= $value){
                $retCrianca = $perc;
                break;
            }
        }
        
        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'pai' => $retPai,
            'adulto' => $retAdulto,
            'crianca' => $retCrianca,
            'done' => true
        ];
        if(Auth::User()->role_id != 1){
            Instrumento7::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 7]);
        }

        //dd($pai,$retPai, $adulto, $retAdulto, $crianca, $retCrianca);
        return $this->instrumento7($retPai, $retAdulto, $retCrianca);

    }

    public function instrumento7($retPai, $retAdulto, $retCrianca){
        return view('diagnostico7')->with(compact('retPai', 'retAdulto', 'retCrianca'));
    }

    //========== INSTRUMENTO 8 ==========

    public function requestInstrumento8(Request $request){
        
        $a = array_sum($request['E']);
        $b = array_sum($request['F']);

        //tabela de conversão
        $exposicao = [
            100 => 47,
            90 => 38,
            80 => 35,
            70 => 32,
            60 => 30,
            50 => 28,
            40 => 26,
            30 => 23,
            20 => 23,
            10 => 20,
            1 => 13
        ];
        
        $feedback = [
            100 => 48,
            90 => 40,
            80 => 37,
            70 => 35,
            60 => 33,
            50 => 32,
            40 => 31,
            30 => 29,
            20 => 27,
            10 => 24,
            1 => 18
        ];

        $retExpo = 10;
        $retFeed = 10;
        foreach($exposicao as $perc => $value){
            if($a >= $value){
                $retExpo = $perc;
                break;
            }
        }
        
        foreach($feedback as $perc => $value){
            if($b >= $value){
                $retFeed = $perc;
                break;
            }
        }

        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'exposicao' => $retExpo,
            'feedback' => $retFeed,
            'done' => true
        ];
        if(Auth::User()->role_id != 1){
            Instrumento8::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 8]);
        }

        return $this->instrumento8($retExpo, $retFeed);
    }

    public function instrumento8($retExpo, $retFeed){
        return view('diagnostico8')->with(compact('retExpo', 'retFeed'));
    }

    //========== INSTRUMENTO 9 ==========

    public function requestInstrumento9(Request $request){
        //dd($request);
        //Visual
        $visual = 0;
        for ($i=0; $i < 10; $i++) { 
            if($request['grupoA'.$i] == 's'){
                $visual++;
            }
        }
        //Auditivo
        $auditivo = 0;
        for ($i=0; $i < 10; $i++) { 
            if($request['grupoB'.$i] == 's'){
                $auditivo++;
            }
        }

        //Cinestesico
        $cinestesico = 0;
        for ($i=0; $i < 10; $i++) { 
            if($request['grupoC'.$i] == 's'){
                $cinestesico++;
            }
        }
        
        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'visual' => $visual,
            'auditivo' => $auditivo,
            'cinestesico' => $cinestesico,
            'done' => true
        ];
        if(Auth::User()->role_id != 1){
            Instrumento9::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 9]);
        }

        return $this->instrumento9($visual, $auditivo, $cinestesico);
    }

    public function instrumento9($visual, $auditivo, $cinestesico){
        return view('diagnostico9')->with(compact('visual', 'auditivo', 'cinestesico'));
    }

    //========== INSTRUMENTO 10 ==========

    public function requestInstrumento10(Request $request){
        $total = 0;
        for($i=0; $i<20; $i++){
            if($request["questao{$i}"] == 's'){
                $total++;
            }
        }

        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'total' => $total,
            'done' => true
        ];
        if(Auth::User()->role_id != 1){
            Instrumento10::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 10])        ;
        }
        
        //dd($total, $diagnostico, $inicio, $fim);
        return $this->instrumento10($total);
    }

    public function instrumento10($total){
        if($total >= 18){
            $inicio = 18;
            $fim = 20;
            $diagnostico = "<p class='fonte18'><b>De 18 a 20 pontos.</b></p>
            <p class='fonte18'>Sua inteligência emocional é alta.</p>
            <p class='fonte18'>Pessoas com alta pontuação em Inteligência Emocional têm habilidade para interpretar, entender e agir sobre as emoções próprias e dos outros.</p>
            <p class='fonte18'>Você têm facilidade para lidar com conflitos sociais e emocionais, sabe expressar seus sentimentos e administrar as situações emocionais.</p>
            <p class='fonte18'>Você têm facilidade de fazer amigos e relacionar-se com as pessoas de maneira harmoniosa e produtiva.</p>";
        }
        elseif($total >= 11){
            $inicio = 11;
            $fim = 17;
            $diagnostico = "<p class='fonte18'><b>De 11 a 17 pontos.</b></p>
            <p class='fonte18'>Sua inteligência emocional é média.</p>
            <p class='fonte18'>Pessoas com pontuação média normalmente sabem interpretar e entender sentimentos e emoções próprias e dos outros.</p>
            <p class='fonte18'>Você se sente confortável quando tem que enfrentar situações de conflito social e emocional.</p>
            <p class='fonte18'>Embora muitas vezes você não tome a iniciativa, sabe fazer amizades e está apto (a) a trabalhar de forma harmoniosa com a equipe.</p>
            <p class='fonte18'>Todavia, você tem potencial para melhorar seu nível de Inteligência Emocional.</p>";
        }
        else{
            $inicio = 0;
            $fim = 11;
            $diagnostico = "<p class='fonte18'><b>Abaixo de 11 pontos.</b></p>
            <p class='fonte18'>Sua Inteligência Emocional precisa melhorar, desenvolver.</p>
            <p class='fonte18'>Pessoas com esta pontuação podem sentir dificuldades de expressar suas próprias emoções e entender as emoções dos outros, diante dos quais tendem a sentir-se desconfortáveis.</p>
            <p class='fonte18'>Em alguns casos pode significar que precisem melhorar sua auto-estima e autoconfiança como também precisam aprender a ter mais empatia com os outros.</p>
            <p class='fonte18'>Analise mais suas atitudes e modo de agir e treine seus sentimentos de empatia.</p>
            <p class='fonte18'>Procure-se colocar no lugar do outro e pense como você reagiria se outra pessoa agisse com você com o mesmo comportamento que você utiliza com ela.</p>";
        }
        
        //dd($total, $diagnostico, $inicio, $fim);
        return view('diagnostico10')->with(compact('total', 'diagnostico', 'inicio', 'fim'));
    }

    //========== INSTRUMENTO 11 ==========

    public function requestInstrumento11(Request $request){
        $data = $request->all();

        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'data' => $data,
            'done' => true
        ];
        if(Auth::User()->role_id != 1){
            Instrumento11::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 11]) ;
        }
        $instrumento11 = new Instrumento11;
        $instrumento11->data = $data;

        return $this->instrumento11($instrumento11);
    }

    public function requestInstrumento11_2(Request $request){
        $data = $request->all();

        $instrumento11 = Instrumento11::where('user_id', Auth::User()->id)->first();
        $instrumento11->data_diag = $data;
        
        if(Auth::User()->role_id != 1){
            $instrumento11->save();
        }

        return $this->instrumento11($instrumento11);
    }

    public function instrumento11($data){
        return view('diagnostico11')->with(compact('data'));
    }

    //========== INSTRUMENTO 12 ==========

    public function requestInstrumento12(Request $request){
        $s = $n = 0;
        for($i = 0; $i < 18; $i++){
            $s += $request["questao{$i}"] == 's' ? 1 : 0;
            $n += $request["questao{$i}"] == 'n' ? 1 : 0;
            $resposta[$i] = $request["questao{$i}"];
        }

        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'respostas' => $resposta,
            'sim' => $s,
            'nao' => $n,
            'done' => true
        ];

        if(Auth::User()->role_id != 1){
            Instrumento12::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 12]) ;
        }

        return $this->instrumento12($s, $n, $resposta);
    }

    public function instrumento12($s, $n, $resposta){
        if($s >= 15){
            $texto = "
            <p class='fonte18'>Após avaliar os resultados sobre sua prática atual de Prospecção, na primeira parte deste instrumento que você respondeu, você se localiza no seguinte intervalo na escala de 1 a 10 que foi utilizada:</p>
            <p class='fonte18'>Os resultados da sua atividade de Prospecção de clientes são muito confortáveis.</p>
            
            <p class='fonte18'>Numa escala onde:</p>
            <table>
            <tr>
                <td rowspan='3'><img src='../posicionamento/public/img/instrumento12/diag_12_2.png' style='width: 100%;'></td>
                <td><p class='fonte18'>De 1 a 5</p></td>
            </tr>
            <tr>
                <td><p class='fonte18'>De 6 a 8</p></td>
            </tr>
            <tr>
                <td><p class='fonte18'>De 9 a 10</p></td>
            </tr>
            
            </table>
            
                        
            <p class='fonte18'><b>Esta é sua posição na escala:</b></p>
            <center><img src='../posicionamento/public/img/instrumento12/diag_12_c.png' style='width: 20%;'></center><br>
            
            <p class='fonte18' style='color: red'>De 9 a 10 – Seus resultados levam a concluir que sua atividade de Prospecção de  clientes apresenta um excelente nível de eficácia. </p>
            
            ";
            $numEscala = 10;
        }
        else if($s >= 11){
            $texto = "
            <p class='fonte18'>Após avaliar os resultados sobre sua prática atual de Prospecção, na primeira parte deste instrumento que você respondeu, você se localiza no seguinte intervalo na escala de 1 a 10 que foi utilizada:</p>
            <p class='fonte18'>Os resultados da sua atividade de Prospecção de clientes são de eficácia intermediária.</p>
            
            <p class='fonte18'>Numa escala onde:</p>
            <table>
            <tr>
                <td rowspan='3'><img src='../posicionamento/public/img/instrumento12/diag_12_2.png' style='width: 100%;'></td>
                <td><p class='fonte18'>De 1 a 5</p></td>
            </tr>
            <tr>
                <td><p class='fonte18'>De 6 a 8</p></td>
            </tr>
            <tr>
                <td><p class='fonte18'>De 9 a 10</p></td>
            </tr>
            
            </table>

            <p class='fonte18'><b>Esta é sua posição na escala:</b></p>
            <center><img src='../posicionamento/public/img/instrumento12/diag_12_b.png' style='width: 20%;'></center><br>
            
            <p class='fonte18' style='color: red'>De 6 a 8 – Seus resultados mostram que sua atividade de Prospecção de clientes apresenta um nível intermediário de consistência. </p>
            ";
            $numEscala = 6;
        }
        else{
            $texto = "
            <p class='fonte18'>Após avaliar os resultados sobre sua prática atual de Prospecção, na primeira parte deste instrumento que você respondeu, você se localiza no seguinte intervalo na escala de 1 a 10 que foi utilizada:</p>
            
            <p class='fonte18'>Numa escala onde:</p>
            <table>
            <tr>
                <td rowspan='3'><img src='../posicionamento/public/img/instrumento12/diag_12_2.png' style='width: 100%;'></td>
                <td><p class='fonte18'>De 1 a 5</p></td>
            </tr>
            <tr>
                <td><p class='fonte18'>De 6 a 8</p></td>
            </tr>
            <tr>
                <td><p class='fonte18'>De 9 a 10</p></td>
            </tr>
            
            </table>

            <p class='fonte18'><b>Esta é sua posição na escala:</b></p>
            <center><img src='../posicionamento/public/img/instrumento12/diag_12_a.png' style='width: 20%;'></center><br>

            <p class='fonte18' style='color: red'>De 1 a 5 – Seus resultados mostram que sua atividade de Prospecção de clientes apresenta sérios problemas, tendo em conseqüência pouca eficácia.</p>
        ";
        $numEscala = 2;
        }

        $percentNao = $n * 100 / 18;

        return view('diagnostico12')->with(compact('s', 'texto', 'resposta', 'percentNao', 'numEscala'));
    }

    //========== INSTRUMENTO 13 ==========

    public function requestInstrumento13(Request $request){
        for($i = 0; $i < 6; $i++){
            $retorno[$i] = $request['questao'.$i];
        }

        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'retorno' => $retorno,
            'done' => true
        ];

        if(Auth::User()->role_id != 1){
            Instrumento13::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 13]) ;
        }

        return $this->instrumento13($retorno);
    }

    public function instrumento13($retorno){
        return view('diagnostico13')->with(compact('retorno'));
    }

    //========== INSTRUMENTO 14 ==========

    public function requestInstrumento14(Request $request){
        
        $i = 0;
        $returnCores = [];
        $cores = ['red', 'blue','yellow','green','orange','grey','black','purple', '#00C5CD', '#FF6A6A', '#CDCDC1', '#DEB887'];
        foreach($request['cliente'] as $cli){
            $returnCores[$cli] = $cores[$i];
            $clientes[] = $cli;
            $cliRes[$cli] = array_sum($request['valor'.$i++]);
        }
        
        for($i=0; $i < 12; $i++){
            for($j=0; $j < 8; $j++){
                $fatores[$i][$j] = $request['valor'.$j][$i];
            }
        }
        
        arsort($cliRes);

        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'resultado' => $cliRes,
            'clientes' => $clientes,
            'cores' => $returnCores,
            'fatores' => $fatores,
            'done' => true
        ];

        if(Auth::User()->role_id != 1){
            Instrumento14::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 14]) ;
        }

        return $this->instrumento14($cliRes, $clientes, $returnCores);
    }

    public function instrumento14($cliRes, $clientes, $returnCores){
        return view('diagnostico14')->with(compact('cliRes', 'clientes', 'returnCores'));
    }

    //========== INSTRUMENTO 15 ==========

    public function requestInstrumento15_1(Request $request){
        $data = $request->all();
        return view('instrumento15_2')->with(compact('data'));
    }

    public function requestInstrumento15_2(Request $request){
        $total = 0;
        for($i = 0; $i <= 16; $i++){
            $check[] = isset($request['check'.$i]) ? count($request['check'.$i]) : 0;
            $total += isset($request['check'.$i]) ? count($request['check'.$i]) : 0;
        }
        $argumentos = $request['argumentos'];

        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'frequencia' => $check,
            'argumentos' => $argumentos,
            'total' => $total,
            'done' => true
        ];

        if(Auth::User()->role_id != 1){
            Instrumento15::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 15]) ;
        }

        return $this->instrumento15($check, $argumentos, $total);
    }

    public function instrumento15($check, $argumentos, $total){
        return view('diagnostico15')->with(compact('check', 'argumentos', 'total'));
    }
    //========== INSTRUMENTO 16 ==========

    public function requestInstrumento16_1(Request $request){
        $data = $request->all();
        return view('instrumento16_2')->with(compact('data'));
    }
    
    public function requestInstrumento16_2(Request $request){
        $freq = $request['freq'];

        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'frequencia' => $freq,
            'done' => true
        ];

        if(Auth::User()->role_id != 1){
            Instrumento16::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 16]) ;
        }

        return $this->instrumento16($freq);
    }

    public function instrumento16($freq){
        $calc = $freq;
        arsort($calc);
        $ordenado = $calc; 
        return view('diagnostico16')->with(compact('freq', 'ordenado'));
    }

    //========== INSTRUMENTO 17 ==========

    public function requestInstrumento17(Request $request){
        for($i=0; $i < 11; $i++){
            $retorno[$i] = $request['radio'.$i];
            
        }
        $hard = number_format(array_sum($retorno)/11 , 2);
        $soft = $request['radio11'];
        
        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'hard' => $hard,
            'soft' => $soft,
            'done' => true
        ];

        if(Auth::User()->role_id != 1){
            Instrumento17::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 17]) ;
        }

        return $this->instrumento17($hard, $soft);
    }

    public function instrumento17($hard, $soft){
        return view('diagnostico17')->with(compact('hard', 'soft'));
    }

    //========== INSTRUMENTO 18 ==========

    public function requestInstrumento18(Request $request){
        $a = $request['a'];
        $b = $request['b'];
        $c = $request['c'];
        $d = $request['d'];

        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'done' => true
        ];

        if(Auth::User()->role_id != 1){
            Instrumento18::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 18]) ;
        }
        
        $instrumento18 = new Instrumento18;
        $instrumento18->a = $a;
        $instrumento18->b = $b;
        $instrumento18->c = $c;
        $instrumento18->d = $d;

        return $this->instrumento18($instrumento18);
    }

    public function requestInstrumento18_2(Request $request){
        $a = $request['a1'];
        $b = $request['b1'];
        $c = $request['c1'];
        $d = $request['d1'];

        $instrumento18 = Instrumento18::where('user_id', Auth::User()->id)->first();
        $instrumento18->a_diag = $a;
        $instrumento18->b_diag = $b;
        $instrumento18->c_diag = $c;
        $instrumento18->d_diag = $d;
        
        if(Auth::User()->role_id != 1){
            $instrumento18->save();
        }
        
        return $this->instrumento18($instrumento18);
    }

    public function instrumento18($instrumento){
        return view('diagnostico18')->with(compact('instrumento'));
    }

        //========== INSTRUMENTO 19 ==========

    public function requestInstrumento19(Request $request){
        //dd($request);
        for($i = 0; $i < 7; $i++){
            $calc[$i] = $request['radio'.$i];
        }
        $retorno = $calc; 
        $ordem = $calc;
        asort($ordem);

        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'retorno' => $retorno,
            'ordem' => $ordem,
            'done' => true
        ];

        if(Auth::User()->role_id != 1){
            Instrumento19::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 19]) ;
        }

        return $this->instrumento19($retorno, $ordem);
    }

    public function instrumento19($retorno, $ordem){
        return view('diagnostico19')->with(compact('retorno', 'ordem'));
    }

    //========== INSTRUMENTO 20 ==========

    public function requestInstrumento20(Request $request){
        //dd($request);
        for($i = 0; $i < 5; $i++){
            $retorno[$i] = $request['radio'.$i];
        }
        
        //salva no BD
        $dataBd = [
            'user_id' => Auth::User()->id,
            'retorno' => $retorno,
            'done' => true
        ];

        if(Auth::User()->role_id != 1){
            Instrumento20::create($dataBd);
            UserInstrumento::create(['user_id' => Auth::User()->id, 'instrumento' => 20]) ;
        }

        return $this->instrumento20($retorno);
    }

    public function instrumento20($retorno){
        return view('diagnostico20')->with(compact('retorno'));
    }

    public function teste1(){
        $auth = Auth::user();
        dd($auth->getInstrumentos());
    }

    //Relatorios
    public function reportInstrumento1(){
        $instrumento1 = Instrumento1::get();
        $total = count($instrumento1);

        $q1 = $q2 = $q3 = $q4 = $q5 = $q6 = $q7 = $q8 = $q9 = 0;
        foreach($instrumento1 as $inst1){
            switch ($inst1->quadrante) {
                case '1':
                    $q1++;
                break;
                case '2':
                    $q2++;
                break;
                case '3':
                    $q3++;
                break;
                case '4':
                    $q4++;
                break;
                case '5':
                    $q5++;
                break;
                case '6':
                    $q6++;
                break;
                case '7':
                    $q7++;
                break;
                case '8':
                    $q8++;
                break;
                case '9':
                    $q9++;
                break;
            }
        }

        $qp1 = $q1 * 100 / $total ?? 0;
        $qp2 = $q2 * 100 / $total ?? 0;
        $qp3 = $q3 * 100 / $total ?? 0;
        $qp4 = $q4 * 100 / $total ?? 0;
        $qp5 = $q5 * 100 / $total ?? 0;
        $qp6 = $q6 * 100 / $total ?? 0;
        $qp7 = $q7 * 100 / $total ?? 0;
        $qp8 = $q8 * 100 / $total ?? 0;
        $qp9 = $q9 * 100 / $total ?? 0;
        
        $quadrante = [$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9];
        $quadrantePorc = [$qp1,$qp2,$qp3,$qp4,$qp5,$qp6,$qp7,$qp8,$qp9];

        return view('report.report_instrumento1')->with(compact('quadrante', 'quadrantePorc'));
    }

    public function reportInstrumento2(){
        $instrumento2 = Instrumento2::get();
        $total = count($instrumento2);
        $maior1 = $maior2 = $maior3 = $maior4 = $maior5 = 0;
        $menor1 = $menor2 = $menor3 = $menor4 = $menor5 = 0;

        foreach ($instrumento2 as $inst) {
            switch ($inst->desvio_maior) {
                case '1':
                    $maior1++;
                    break;
                case '2':
                    $maior2++;
                    break;
                case '3':
                    $maior3++;
                    break;
                case '4':
                    $maior4++;
                    break;
                case '5':
                    $maior5++;
                    break;
            }

            switch ($inst->desvio_menor) {
                case '1':
                    $menor1++;
                    break;
                case '2':
                    $menor2++;
                    break;
                case '3':
                    $menor3++;
                    break;
                case '4':
                    $menor4++;
                    break;
                case '5':
                    $menor5++;
                    break;
            }
        }

        $desvio_maior = [$maior1,$maior2,$maior3,$maior4,$maior5];
        $desvio_menor = [$menor1,$menor2,$menor3,$menor4,$menor5];

        return view('report.report_instrumento2')->with(compact('desvio_maior', 'desvio_menor', 'total'));
    }

    public function reportInstrumento3(){
        $instrumento3 = Instrumento3::get();
        $total = count($instrumento3);
        for ($i=0; $i < 19; $i++) { 
            for ($j=1; $j <= 10; $j++) { 
                $escala[$i][$j] = 0;
            }
        }
        
        foreach ($instrumento3 as $inst) {
            $i=0;
            foreach($inst->retorno as $ret){
                $escala[$i][$ret]++;
                $i++;
            }
        }

        return view('report.report_instrumento3')->with(compact('escala', 'total'));
    }

    public function reportInstrumento4(){
        $instrumento4 = Instrumento4::get();
        $total = count($instrumento4);
        //dd($instrumento4->first());
        /* for ($i=0; $i < 19; $i++) { 
            for ($j=1; $j <= 10; $j++) { 
                $escala[$i][$j] = 0;
            }
        }
        
        foreach ($instrumento4 as $inst) {
            $i=0;
            foreach($inst->retorno as $ret){
                $escala[$i][$ret]++;
                $i++;
            }
        } */

        return view('report.report_instrumento4')->with(compact('escala', 'total'));
    }

    public function reportInstrumento5(){
        $instrumento5 = Instrumento5::get();
        $total = count($instrumento5);
        //dd($instrumento4->first());
        /* for ($i=0; $i < 19; $i++) { 
            for ($j=1; $j <= 10; $j++) { 
                $escala[$i][$j] = 0;
            }
        }
        
        foreach ($instrumento4 as $inst) {
            $i=0;
            foreach($inst->retorno as $ret){
                $escala[$i][$ret]++;
                $i++;
            }
        } */

        return view('report.report_instrumento5')->with(compact('escala', 'total'));
    }

    public function reportInstrumento7(){
        $instrumento7 = Instrumento7::get();
        $total = count($instrumento7);
        
        $pai = $adulto = $crianca = 0;
        foreach ($instrumento7 as $inst) {
            $pai += $inst->pai;
            $adulto += $inst->adulto;
            $crianca += $inst->crianca;
        }

        $pai = number_format($pai/$total, 2);
        $adulto = number_format($adulto/$total, 2);
        $crianca = number_format($crianca/$total, 2);

        $data = [$pai, $adulto, $crianca];

        return view('report.report_instrumento7')->with(compact('data', 'total'));
    }

    public function reportInstrumento8(){
        $instrumento8 = Instrumento8::get();
        $feed60 = Instrumento8::where('feedback', '>=', 60)->get();
        $feed60 = count($feed60);

        $expo60 = Instrumento8::where('exposicao', '>=', 60)->get();
        $expo60 = count($expo60);

        $janela25 = Instrumento8::where('feedback', '<=', 25)->where('exposicao', '<=', 25)->get();
        $janela25 = count($janela25);

        $janela70 = Instrumento8::where('feedback', '>=', 70)->where('exposicao', '>=', 70)->get();
        $janela70 = count($janela70);


        $total = count($instrumento8);
        
        $retExpo = $retFeed = 0;
        foreach ($instrumento8 as $inst) {
            $retExpo += $inst->exposicao;
            $retFeed += $inst->feedback;
        }
        
        $retExpo /= $total;
        $retFeed /= $total;
        
        return view('report.report_instrumento8')->with(compact('retExpo', 'retFeed', 'feed60', 'expo60', 'janela25', 'janela70', 'total'));
    }
    
    public function reportInstrumento9(){
        $instrumento9 = Instrumento9::get();
        $visualMenor3 = Instrumento9::where('visual', '<=', 3)->get();
        $auditivoMenor3 = Instrumento9::where('auditivo', '<=', 3)->get();
        $cinestesicoMenor3 = Instrumento9::where('cinestesico', '<=', 3)->get();
        
        $visualMenor3 = count($visualMenor3);
        $auditivoMenor3 = count($auditivoMenor3);
        $cinestesicoMenor3 = count($cinestesicoMenor3);

        $total = count($instrumento9);
        
        $visual = $auditivo = $cinestesico = 0;
        foreach ($instrumento9 as $inst) {
            $visual += $inst->visual;
            $auditivo += $inst->auditivo;
            $cinestesico += $inst->cinestesico;
        }
        
        $visual /= $total;
        $auditivo /= $total;
        $cinestesico /= $total;
        
        return view('report.report_instrumento9')->with(compact('visual', 'auditivo', 'cinestesico', 'visualMenor3', 'auditivoMenor3', 'cinestesicoMenor3', 'total'));
    }

    public function reportInstrumento10(){
        $instrumento10 = Instrumento10::get();
        $total = count($instrumento10);
        
        $dif18 = Instrumento10::where('total', '>=', 18)->where('total', '<=', 20)->get();
        $dif12 = Instrumento10::where('total', '>=', 12)->where('total', '<=', 17)->get();
        $dif1 = Instrumento10::where('total', '>=', 1)->where('total', '<=', 11)->get();
        
        $dif18 = count($dif18);
        $dif12 = count($dif12);
        $dif1 = count($dif1);
        
        return view('report.report_instrumento10')->with(compact('dif18', 'dif12', 'dif1', 'total'));
    }

    public function reportInstrumento11(){
        $instrumento11 = Instrumento11::get();
        $total = count($instrumento11);
        
        for ($i=0; $i < 6; $i++) { 
            //Idade
            $retIdade1[$i] = 0;
            $retIdade2[$i] = 0;
            //Sexo
            $retSexo1[$i] = 0;
            $retSexo2[$i] = 0;
            //Renda
            $retRenda1[$i] = 0;
            $retRenda2[$i] = 0;
            //Familia
            $retFamilia1[$i] = 0;
            $retFamilia2[$i] = 0;
            //Escola
            $retEscola1[$i] = 0;
            $retEscola2[$i] = 0;
            //Trabalho
            $retTrabalho1[$i] = 0;
            $retTrabalho2[$i] = 0;
            //Regiao
            $retRegiao1[$i] = 0;
            $retRegiao2[$i] = 0;
            //Habitantes
            $retHabitantes1[$i] = 0;
            $retHabitantes2[$i] = 0;
            //VolumeCompra
            $retVolumeCompra1[$i] = 0;
            $retVolumeCompra2[$i] = 0;
            //FrequenciaCompra
            $retFrequenciaCompra1[$i] = 0;
            $retFrequenciaCompra2[$i] = 0;
            //ValorCompra
            $retValorCompra1[$i] = 0;
            $retValorCompra2[$i] = 0;
            
        }
        
        foreach($instrumento11 as $inst){
            //Idade
            switch ($inst->data['idade']) {
                case 'Adolescentes 15 a 18 anos':
                $retIdade1[0]++;
                break;
                case 'Adulto Jovem 19 a 35 anos':
                $retIdade1[1]++;
                break;
                case 'Meia Idade 36 a 50 anos':
                $retIdade1[2]++;
                break;
                case 'Maduros 50 a 60 anos':
                $retIdade1[3]++;
                break;
                case 'Terceira Idade Acima de 60 anos':
                $retIdade1[4]++;
                break;
            }

            switch ($inst->data_diag['idade']) {
                case 'Adolescentes 15 a 18 anos':
                $retIdade2[0]++;
                break;
                case 'Adulto Jovem 19 a 35 anos':
                $retIdade2[1]++;
                break;
                case 'Meia Idade 36 a 50 anos':
                $retIdade2[2]++;
                break;
                case 'Maduros 50 a 60 anos':
                $retIdade2[3]++;
                break;
                case 'Terceira Idade Acima de 60 anos':
                $retIdade2[4]++;
                break;
            }

            //Sexo
            switch ($inst->data['sexo']) {
                case 'Homem':
                $retSexo1[0]++;
                break;
                case 'Mulher':
                $retSexo1[1]++;
                break;
            }

            switch ($inst->data_diag['sexo']) {
                case 'Homem':
                $retSexo2[0]++;
                break;
                case 'Mulher':
                $retSexo2[1]++;
                break;
            }
            
            //Renda
            switch ($inst->data['salario']) {
                case 'Até 5 salários mínimos':
                $retRenda1[0]++;
                break;
                case 'De 6 a 10 salários mínimos':
                $retRenda1[1]++;
                break;
                case 'De 10 a 20 salários mínimos':
                $retRenda1[2]++;
                break;
                case 'Acima de 20 salários mínimos':
                $retRenda1[3]++;
                break;
            }

            switch ($inst->data_diag['salario']) {
                case 'Até 5 salários mínimos':
                $retRenda2[0]++;
                break;
                case 'De 6 a 10 salários mínimos':
                $retRenda2[1]++;
                break;
                case 'De 10 a 20 salários mínimos':
                $retRenda2[2]++;
                break;
                case 'Acima de 20 salários mínimos':
                $retRenda2[3]++;
                break;
            }

            //Familia
            switch ($inst->data['familia']) {
                case 'Mora sozinho':
                $retFamilia1[0]++;
                break;
                case 'Não tem filhos':
                $retFamilia1[1]++;
                break;
                case 'Família pequena':
                $retFamilia1[2]++;
                break;
                case 'Família pequena: até 2 filhos':
                $retFamilia1[3]++;
                break;
                case 'Família grande Outras pessoas moram com o casal (sogros, tios,..':
                $retFamilia1[4]++;
                break;
            }

            switch ($inst->data_diag['familia']) {
                case 'Mora sozinho':
                $retFamilia2[0]++;
                break;
                case 'Não tem filhos':
                $retFamilia2[1]++;
                break;
                case 'Família pequena':
                $retFamilia2[2]++;
                break;
                case 'Família pequena: até 2 filhos':
                $retFamilia2[3]++;
                break;
                case 'Família grande Outras pessoas moram com o casal (sogros, tios,..':
                $retFamilia2[4]++;
                break;
            }

            //Escola
            switch ($inst->data['escola']) {
                case 'Ensino Fundamental Incompleto':
                $retEscola1[0]++;
                break;                
                case 'Ensino Fundamental Completo':
                $retEscola1[1]++;
                break;                
                case 'Ensino Médio Incompleto':
                $retEscola1[2]++;
                break;                
                case 'Ensino Médio Completo':
                $retEscola1[3]++;
                break;                
                case 'Ensino Superior':
                $retEscola1[4]++;
                break;
                case 'Pós Graduado':
                $retEscola1[5]++;
                break;
            }

            switch ($inst->data_diag['escola']) {
                case 'Ensino Fundamental Incompleto':
                $retEscola2[0]++;
                break;                
                case 'Ensino Fundamental Completo':
                $retEscola2[1]++;
                break;                
                case 'Ensino Médio Incompleto':
                $retEscola2[2]++;
                break;                
                case 'Ensino Médio Completo':
                $retEscola2[3]++;
                break;                
                case 'Ensino Superior':
                $retEscola2[4]++;
                break;
                case 'Pós Graduado':
                $retEscola2[5]++;
                break;
            }

            //Trabalho
            switch ($inst->data['trabalho']) {
                case 'Autônomos':
                $retTrabalho1[0]++;
                break;
                case 'Empregados':
                $retTrabalho1[1]++;
                break;
                case 'Trabalham no setor de Serviços':
                $retTrabalho1[2]++;
                break;
                case 'Trabalham na Indústria':
                $retTrabalho1[3]++;
                break;
                case 'Trabalho Intelectual':
                $retTrabalho1[4]++;
                break;
                case 'Trabalho Manual':
                $retTrabalho1[5]++;
                break;
            }

            switch ($inst->data_diag['trabalho']) {
                case 'Autônomos':
                $retTrabalho2[0]++;
                break;
                case 'Empregados':
                $retTrabalho2[1]++;
                break;
                case 'Trabalham no setor de Serviços':
                $retTrabalho2[2]++;
                break;
                case 'Trabalham na Indústria':
                $retTrabalho2[3]++;
                break;
                case 'Trabalho Intelectual':
                $retTrabalho2[4]++;
                break;
                case 'Trabalho Manual':
                $retTrabalho2[5]++;
                break;
            }

            //Regiao
            switch ($inst->data['regiao']) {
                case 'Zona Norte':
                $retRegiao1[0]++;
                break;
                case 'Zona Sul':
                $retRegiao1[1]++;
                break;
                case 'Centro':
                $retRegiao1[2]++;
                break;
                case 'Zona Oeste':
                $retRegiao1[3]++;
                break;
                case 'Zona Leste':
                $retRegiao1[4]++;
                break;
            }

            switch ($inst->data_diag['regiao']) {
                case 'Zona Norte':
                $retRegiao2[0]++;
                break;
                case 'Zona Sul':
                $retRegiao2[1]++;
                break;
                case 'Centro':
                $retRegiao2[2]++;
                break;
                case 'Zona Oeste':
                $retRegiao2[3]++;
                break;
                case 'Zona Leste':
                $retRegiao2[4]++;
                break;
            }
            
            //Habitantes
            switch ($inst->data['habitantes']) {
                case 'Alta concentração de habitantes':
                $retHabitantes1[0]++;
                break;
                case 'Média concentração de habitantes':
                $retHabitantes1[1]++;
                break;
                case 'Baixa concentração de habitantes':
                $retHabitantes1[2]++;
                break;
            }

            switch ($inst->data_diag['habitantes']) {
                case 'Alta concentração de habitantes':
                $retHabitantes2[0]++;
                break;
                case 'Média concentração de habitantes':
                $retHabitantes2[1]++;
                break;
                case 'Baixa concentração de habitantes':
                $retHabitantes2[2]++;
                break;
            }

            //VolumeCompra
            switch ($inst->data['volume_compra']) {
                case 'Alto':
                $retVolumeCompra1[0]++;
                break;
                case 'Médio':
                $retVolumeCompra1[1]++;
                break;
                case 'Baixo':
                $retVolumeCompra1[2]++;
                break;
            }

            switch ($inst->data_diag['volume_compra']) {
                case 'Alto':
                $retVolumeCompra2[0]++;
                break;
                case 'Médio':
                $retVolumeCompra2[1]++;
                break;
                case 'Baixo':
                $retVolumeCompra2[2]++;
                break;
            }
            
            //FrequenciaCompra
            switch ($inst->data['frequencia_compra']) {
                case 'Alta':
                $retFrequenciaCompra1[0]++;
                break;
                case 'Média':
                $retFrequenciaCompra1[1]++;
                break;
                case 'Baixa':
                $retFrequenciaCompra1[2]++;
                break;
            }

            switch ($inst->data_diag['frequencia_compra']) {
                case 'Alta':
                $retFrequenciaCompra2[0]++;
                break;
                case 'Média':
                $retFrequenciaCompra2[1]++;
                break;
                case 'Baixa':
                $retFrequenciaCompra2[2]++;
                break;
            }

            //ValorCompra
            switch ($inst->data['valor_compra']) {
                case 'Preço':
                $retValorCompra1[0]++;
                break;
                case 'Qualidade':
                $retValorCompra1[1]++;
                break;
                case 'Entrega Rápida':
                $retValorCompra1[2]++;
                break;
                case 'Formas de Pagamento':
                $retValorCompra1[3]++;
                break;
            }

            switch ($inst->data_diag['valor_compra']) {
                case 'Preço':
                $retValorCompra2[0]++;
                break;
                case 'Qualidade':
                $retValorCompra2[1]++;
                break;
                case 'Entrega Rápida':
                $retValorCompra2[2]++;
                break;
                case 'Formas de Pagamento':
                $retValorCompra2[3]++;
                break;
            }

        }

        //dd($retIdade1 ,$retIdade2);
        //dd($retFamilia1, $retFamilia2);
        //dd($retEscola1, $retEscola2);
        //dd($retFrequenciaCompra1, $retFrequenciaCompra2);

        
        return view('report.report_instrumento11')
            ->with(compact('retIdade1','retIdade2','retSexo1','retSexo2',
                            'retRenda1','retRenda2','retFamilia1','retFamilia2',
                            'retEscola1','retEscola2','retTrabalho1','retTrabalho2',
                            'retRegiao1','retRegiao2','retHabitantes1','retHabitantes2',
                            'retVolumeCompra1','retVolumeCompra2','retFrequenciaCompra1','retFrequenciaCompra2',
                            'retValorCompra1','retValorCompra2'));
    }

    public function reportInstrumento12(){
        $instrumento12 = Instrumento12::get();
        $total = count($instrumento12);
        
        $alto = Instrumento12::where('sim', '>=', '15')->get();
        $alto = count($alto);

        $medio = Instrumento12::where('sim', '>=', '11')->where('sim', '<', '15')->get();
        $medio = count($medio);
        
        $baixo = Instrumento12::where('sim', '<', '11')->get();
        $baixo = count($baixo);

        return view('report.report_instrumento12')->with(compact('alto','medio','baixo','total'));
    }

    public function reportInstrumento13(){
        $instrumento13 = Instrumento13::get();
        $total = count($instrumento13);

        $total = $alto = $medio = $baixo = 0;

        foreach($instrumento13 as $inst){
            foreach($inst->retorno as $value){
                switch ($value) {
                    case '1':
                    case '2':
                        $baixo++;
                    break;
                    case '3':
                    case '4':
                        $medio++;
                    break;
                    case '5':
                        $alto++;
                    break;
                }
                $total++;
            }
        }
        
        return view('report.report_instrumento13')->with(compact('baixo','medio','alto','total'));
    }

    public function reportInstrumento14(){
        $instrumento14 = Instrumento14::get();
        $total = count($instrumento14);
        
        for ($i=1; $i <= 8; $i++) { 
            $firstTo[$i] = 0;
            $secondTo[$i] = 0;
            $lastTo[$i] = 0;   
        }

        for ($i=1; $i <= 12; $i++) { 
            $fatores[$i] = 0;
            $totalFatores[$i] = 0;
        }

        foreach($instrumento14 as $inst){
            $first = $inst->clientes[0];
            $second = $inst->clientes[1];
            $last = $inst->clientes[7];

            $i=1;
            foreach($inst->resultado as $key=>$value){
                if($key == $first){
                    $firstTo[$i]++;
                }
                if($key == $second){
                    $secondTo[$i]++;
                }
                if($key == $last){
                    $lastTo[$i]++;
                }
                $i++;
            }

            $i=1;
            foreach($inst->fatores as $fat){
                foreach($fat as $value){
                    $totalFatores[$i]++;
                    if($value <= 3){
                        $fatores[$i]++;
                    }
                }
                $i++;
            }
        }

        
        return view('report.report_instrumento14')->with(compact('firstTo', 'secondTo', 'lastTo', 'fatores', 'total', 'totalFatores'));
    }

    public function reportInstrumento15(){
        $instrumento15 = Instrumento15::get();
        $total = count($instrumento15);
        $totalFreq = 0;
        for ($i=0; $i < 17; $i++) { 
            $frequencia[$i] = 0;
        }

        foreach($instrumento15 as $inst){
            // dd($inst);
            $i=0;
            foreach($inst->frequencia as $freq){
                $frequencia[$i] += $freq;
                $totalFreq += $freq;
                $i++;
            }
        }

        
        return view('report.report_instrumento15')->with(compact('frequencia', 'totalFreq', 'total'));
    }
}
