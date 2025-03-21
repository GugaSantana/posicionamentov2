@extends('adminlte::page')

@section('content')
           
<div class="card card-primary">
    <div class="card-header">
        <div class="row d-none d-xl-block">
            <div class="col-12" style="z-index: 1; position: absolute;">
                <h3><center>INSTRUMENTO 4</center></h3>
        <h3><center>MEU CONHECIMENTO DA LINHA DE PRODUTOS QUE VENDO</center></h3>
        </div>
            <div class='col-12' style="margin-left: 1em">
                <img src="{{ asset('img/botton_ts.png') }}" style="width: 6em; float:right; margin-right: 1%">
            </div>
        </div>

        <div class="row d-block d-xl-none">
            <div class="col-12">
                <h3>
                    <center>INSTRUMENTO 4</center>
                </h3>
                <h3>
                    <center>MEU CONHECIMENTO DA LINHA DE PRODUTOS QUE VENDO</center>
                </h3>
            </div>
        </div>

    </div>
    <div class="card-body">

                        <div class="col-12">
                            <h4>
                                <center>Levantamento de Informações</center>
                            </h4>

                            <p class="fonte18">No Instrumento anterior, identificamos seu perfil profissional e foram feitas Recomendações para desenvolver suas Competências. Porém, um vendedor profissional deve conhecer muito bem os produtos que vende.</p>
                            <p class="fonte18">Trata-se de se definir sobre que conteúdo vamos aplicar as técnicas de Vendas.</p>
                            <p class="fonte18">Este Instrumento refere-se precisamente ao seu conhecimento em relação aos produtos que você vende. Em que medida você conhece os produtos que você comercializa.</p>
                            <p class="fonte18">São necessárias duas dimensões estratégicas para aumentar sua eficácia em Vendas.</p>
                            <p class="fonte18">Você deve dominar:</p>
                        
                            <div class="row">
                                <div class="col-12" style="overflow: auto;">
                                    <table class="table table-hover table-bordered">
                                        <thead class="bg-primary center">    
                                            <tr class="fonte18">
                                                <th style="vertical-align: middle; width: 50%;">O QUE VENDO</th>
                                                <th style="vertical-align: middle; width: 50%;">COMO VENDO</th>
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

                            <p class="fonte18">O Conhecimento dos meus produtos e dos produtos concorrentes refere-se ao QUE VENDO, enquanto as Técnicas de Vendas tratam de COMO VENDO. Portanto, este Instrumento aborda o item A – Dos Produtos / Serviços, da figura acima.</p>

                        </div>
                        <br>
                        <div class="col-12">
                            <p class="fonte18"><b>INSTRUÇÕES</b></p>

                            <p class="fonte18">Para responder este Instrumento, considere os 10 produtos mais importantes da carteira de produtos que você vende e reflita em que medida você considera que conhece esses produtos da sua carteira.</p>
                            <p class="fonte18">Conhecer um produto significa conhecer os benefícios que esse produto leva ao cliente, que necessidades do cliente atendem, os atributos diferenciais desse produto, sua composição, os obstáculos mais frequentes que você encontra para vendê-lo, entre outras dimensões.</p>
                            <p class="fonte18">Naturalmente que você pode conhecer alguns produtos mais do que outros.</p>
                            <p class="fonte18">Na Matriz seguinte registre os 10 principais produtos que você comercializa e ao lado, o nível de conhecimento que você considera ter de cada um deles.</p>

                            <p class="fonte18">Utilize a escala abaixo para estabelecer o quanto você conhece de cada produto.</p>

                            <center><img src="../posicionamento/public/img/instrumento4/inst4_2.png"></center>
                        <br>
                                                <form name="formulario" role="form" method="post" action="instrumento/4">
                        {!! csrf_field() !!}
                        
                            <!-- TABELA DE QUESTIONARIO -->
                        <div>

                            <div class="table-responsive">
                                <div>
                                <table class="table table-bordered table-hover align-items-center fonte18">
                                    <thead class="bg-primary center">    
                                        <tr>
                                            <th scope="col-8">
                                                Os Produtos do Meu Portifólio
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
                        <button class="btn btn-icon btn-3 btn-primary fonte18" type="submit">
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