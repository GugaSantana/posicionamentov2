@extends('adminlte::page')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3><center>INSTRUMENTO 5</center></h3>
        <h3><center>MEU CONHECIMENTO DOS PRODUTOS CONCORRENTES</center></h3>
    </div>
    <div class="card-body">

                        <div class="col-12">
                            <h4>
                                <center>Levantamento de Informações</center>
                            </h4>
                        
                        <p class="fonte18">Este instrumento está relacionado com o instrumento 4. Tem o mesmo objetivo, só que agora vamos medir o nível de seu conhecimento em relação aos produtos concorrentes.</p>
                        <p class="fonte18">Avaliaremos o conhecimento que você tem dos produtos concorrentes nos mesmos termos que avaliamos o quanto você conhece os produtos que você vende (benefícios, valor, atributos, preços, composição)</p>
                        <p class="fonte18">Muitas vezes o cliente conhece mais dos seus produtos concorrentes do que você e se você não está à altura do conhecimento que seu cliente tem dos produtos concorrentes, você poderá ter dificuldades para neutralizar os obstáculos e mostrar fragilidade, o que pode transmitir insegurança com o risco de perder credibilidade junto ao cliente.</p>
                        <p class="fonte18">Conforme foi apresentado no instrumento anterior, são necessárias duas dimensões estratégicas</p>
                        <p class="fonte18">Você deve dominar:</p>

                        <div class="row">
                            <div class="col-12" style="overflow: auto;">
                                <table class="table table-hover table-bordered fonte18">
                                    <thead class="bg-primary center">
                                    <tr>
                                        <th style="vertical-align: middle; width: 50%; text-align: center;">O QUE VENDO</th>
                                        <th style="vertical-align: middle; width: 50%; text-align: center;">COMO VENDO</th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px; padding-left: 2%"><font style="color: blue">Implica no conhecimento de duas dimensões</font><br>
                                        A – Dos Produtos / Serviços Oferecidos<br>
                                        B – Dos Produtos / Serviços Concorrentes</td>
                                        <td style="font-size: 18px; vertical-align: middle; width: 600px; text-align: center;">Técnicas de Vendas</td>   
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <br>
                        
                        <p class="fonte18">O Conhecimento dos meus produtos e dos produtos concorrentes se refere ao QUE VENDO, enquanto as Técnicas de Vendas tratam de COMO VENDO.</p>
                        <p class="fonte18">Este instrumento aborda o item B – O conhecimento dos Produtos / Serviços Concorrentes.</p>

                        </div>
                        <br>
                        <div class="col-12">
                            <p class="fonte18"><b>INSTRUÇÕES</b></p>

                            <p class="fonte18">Para responder este Instrumento, considere os 10 mais importantes produtos que concorrem com os que você vende e reflita em que medida você considera que conhece esses produtos.</p>
                            <p class="fonte18">Conhecer um produto concorrente significa conhecer os benefícios que leva ao cliente, que necessidades do cliente atende, os atributos dos produtos, sua composição, entre outras dimensões.</p>
                            <p class="fonte18">Naturalmente que você pode conhecer alguns produtos concorrentes mais do que outros.</p>
                            <p class="fonte18">Na seguinte Matriz registre os 10 principais produtos concorrentes e o nível de conhecimento que você considera ter de cada um deles</p>
                            <p class="fonte18">Utilize a escala abaixo para estabelecer o quanto você conhece de cada produto.</p>

                            <center><img src="../posicionamento/public/img/inst5_2.png"></center>
                        <br>
                        
                        <form name="formulario" role="form" method="post" action="instrumento/5">
                        {!! csrf_field() !!}
                        
                        <p class="fonte18">Você pode utilizar os pontos que estão entre as definições e eles representam com mais precisão seu nível de conhecimento do produto concorrente.</p>

                        <!-- TABELA DE QUESTIONARIO -->
                        <div>

                            <div class="table-responsive">
                                <div>
                                <table class="table table-hover table-bordered align-items-center fonte18">
                                    <thead class="bg-primary center">    
                                        <tr>
                                            <th scope="col-8">
                                                Os Produtos Concorrentes
                                            </th>
                                            @for($i=1;$i<=10;$i++)
                                            <th scope="col-2">
                                                {{$i}}
                                            </th>
                                            @endfor
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="list center">
                                        
                                        @for($i=1;$i<=10;$i++)
                                        <!-- QUESTÃO 1 -->
                                        <tr>
                                            <th scope="row" class="question">
                                                <div class="media align-items-center">
                                                    {{$i}} <input style="margin-left: 4%" type="text" class="form-control" name="produto{{$i}}" placeholder="" required>
                                                </div>
                                            </th>
                                            <td class="1-1">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" class="custom-control-input" id="radio{{$i}}-1" type="radio" value="1" required>
                                                    <label class="custom-control-label" for="radio{{$i}}-1"></label>
                                                </div>                                                
                                            </td>
                                            <td class="1-2">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" class="custom-control-input" id="radio{{$i}}-2" type="radio" value="2" required>
                                                    <label class="custom-control-label" for="radio{{$i}}-2"></label>
                                                </div>
                                            </td>
                                            <td class="1-3">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" class="custom-control-input" id="radio{{$i}}-3" type="radio" value="3" required>
                                                    <label class="custom-control-label" for="radio{{$i}}-3"></label>
                                                </div>                                                
                                            </td>
                                            <td class="1-4">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" class="custom-control-input" id="radio{{$i}}-4" type="radio" value="4" required>
                                                    <label class="custom-control-label" for="radio{{$i}}-4"></label>
                                                </div>
                                            </td>
                                            <td class="1-5">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" class="custom-control-input" id="radio{{$i}}-5" type="radio" value="5" required>
                                                    <label class="custom-control-label" for="radio{{$i}}-5"></label>
                                                </div>                                                
                                            </td>
                                            <td class="1-6">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" class="custom-control-input" id="radio{{$i}}-6" type="radio" value="6" required>
                                                    <label class="custom-control-label" for="radio{{$i}}-6"></label>
                                                </div>
                                            </td>
                                            <td class="1-7">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" class="custom-control-input" id="radio{{$i}}-7" type="radio" value="7" required>
                                                    <label class="custom-control-label" for="radio{{$i}}-7"></label>
                                                </div>                                                
                                            </td>
                                            <td class="1-8">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" class="custom-control-input" id="radio{{$i}}-8" type="radio" value="8" required>
                                                    <label class="custom-control-label" for="radio{{$i}}-8"></label>
                                                </div>
                                            </td>
                                            <td class="1-9">
                                                <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" class="custom-control-input" id="radio{{$i}}-9" type="radio" value="9" required>
                                                    <label class="custom-control-label" for="radio{{$i}}-9"></label>
                                                </div>                                                
                                            </td>
                                            <td class="1-10">
                                            <div class="custom-control custom-radio mb-3">
                                                    <input name="radio{{$i}}" class="custom-control-input" id="radio{{$i}}-10" type="radio" value="10" required>
                                                    <label class="custom-control-label" for="radio{{$i}}-10"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- FIM QUESTÃO 1 -->
                                        @endfor

                                    </tbody>
                                </table>
                                
                            </div>

                            </div>


                            </div>

                        <br>
                        <div class="col-8">
                        <button class="btn btn-icon btn-3 btn-primary" type="submit">
                        <span class="btn-inner--icon"><i class="fa fa-paper-plane"></i></span>
                            <span class="btn-inner--text">Enviar formulário</span>
                        </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
    <script>window.onload = function(){history.go(+1)};</script>
@endpush