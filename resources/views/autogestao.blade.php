<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Auto Gestão</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.flex-box {
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.container-box {
			background-color: white;

		}

		.content-box {
			color: black;
			text-align: justify;
			width: 90%;
			font-size: 18px;
		}

		p {
			margin: 0 10px 10px;
		}

		td{
          padding: 4px;
        }
	</style>

	<script>
		function teste(i){
			document.getElementById("B"+i).innerHTML = '<img src="../posicionamento/public/img/check.png" style="width: 20%;">';
			document.getElementById("C"+i).innerHTML = '<p><a class="btn btn-info" onclick="teste1('+i+');">Sim</a></p>';
		}

		function teste1(i){
			document.getElementById("C"+i).innerHTML = '<img src="../posicionamento/public/img/check.png" style="width: 20%;">';
			document.getElementById("D"+i).innerHTML = '<p><a class="btn btn-info" onclick="teste2('+i+');">Sim</a></p>';
		}

		function teste2(i){
			document.getElementById("D"+i).innerHTML = '<img src="../posicionamento/public/img/check.png" style="width: 20%;">';
			document.getElementById("E"+i).innerHTML = '<p><a class="btn btn-info" onclick="teste3('+i+');">Sim</a></p>';
		}

		function teste3(i){
			document.getElementById("E"+i).innerHTML = '<img src="../posicionamento/public/img/check.png" style="width: 20%;">';
			// document.getElementById("C0").innerHTML = '<p><a class="btn btn-info" onclick="teste1();">Sim</a></p>';
		}

	</script>
</head>

<body style="background-image: url('posicionamento/public/img/img3.png');background-repeat: no-repeat;
  background-attachment: fixed;background-size: 100% 100%;">
	<div class="flex-box container-box" style="
    margin-top: 4%;
    margin-left: 6%;
    margin-right: 6%;
    margin-bottom: 4%;
    background-color: #f2f7f9;
    border-radius: 70px;
">
		<div class="content-box">
			<img src="../posicionamento/public/img/logo_capa.png" style="float: left;width: 30%;margin-top: 2%;">
			<img src="../posicionamento/public/img/selo_top_seller.png" style="float: right;width: 12%;">

			<h2 style="color: #35408f; text-align: center;margin-top: 10%;">AUTOGESTÃO DA METODOLOGIA<h2>

					<h3 style="color: #35408f; text-align: center">ACOMPANHAMENTO DA IMPLANTAÇÃO DA METODOLOGIA</h3>
					<br>
			
					<div style="overflow: auto;">



@php
$inst = [	
	'1 – Meu Nível de Empreendedorismo',
	'2 – Meus problemas prioritários para Aumentar as Vendas',
	'3 – Meu perfil como profissional de vendas',
	'4 – Meu conhecimento da linha de produtos que vendo',
	'5 – Meu conhecimento dos produtos concorrentes',
	'6 – Matriz para aumentar minha Produtividade nas Vendas',
	'7 – Gerenciamento do relacionamento através dos Estados do Ego.',
	'8 – Gerenciamento do relacionamento através da Exposição e do Feedback',
	'9 – Gerenciamento do relacionamento utilizando os Canais Neurolinguísticos',
	'10 – Gerenciamento do relacionamento através da Inteligência Emocional',
	'11 – Definição do perfil do Cliente Ideal',
	'12 – Como fazer a Prospecção de Clientes',
	'13 – Qualificação dos Clientes Potenciais',
	'14 – Matriz para identificar Clientes Prioritários',
	'15 – Desenvolvimento da Quantidade e Qualidade dos meus argumentos de vendas (Forças Propulsoras)',
	'16 – Neutralização dos obstáculos da Venda(Forças Restritivas)',
	'17 – Técnicas de Fechamento de vendas',
	'18 – O Funil de Vendas, com objetivos e métricas de avanço.',
	'19 – Planos de Ação quantitativos para alcançar as metas de vendas',
	'20 – O Relatório de Progresso'
	];
@endphp

@php
$titles = [
	'A - Analisei e estudei o diagnóstico e as recomendações deste instrumento',
	'B - Desenvolvi o Plano de Ação (PA) para Implementar as recomendações deste instrumento',
	'C - Comecei a implementar as recomendações deste instrumento',
	'D - Estou implementando as recomendações deste instrumento',
	'E - Conclui a Implantação das recomendações deste instrumento. Sinto que tenho novas competências'
	];
@endphp


						<table class="table table-hover table-bordered">
							<thead>
								<tr>
									<td style="text-align: center;vertical-align: middle;">
										<p><strong>INSTRUMENTOS</strong></p>
									</td>

									@for($i = 0; $i < 5; $i++)
									<td style="vertical-align: middle; text-align: center">
										<p">{{$titles[$i]}}</p>
									</td>
									@endfor
								</tr>
							</thead>
							<tbody>
								@for($i = 0; $i < 20; $i++)
								@if(in_array(($i+1), Auth::User()->role->instrumentos))
								<tr>
									<td>
										<p style="text-align: left">{{$inst[$i]}}</p>
										@if($instrumentosFinalizados->contains('instrumento', $i+1))
										<center><a href="/instrumento{{$i+1}}" class="fonte18"><span class="fa fa-arrow-circle-right" style="color:red; font-size: 22px"></span> Ir para diagnóstico</a></center>
										@endif
									</td>
									<td id="A{{$i}}" style="text-align: center;vertical-align: middle;">
										@if($instrumentosFinalizados->contains('instrumento', $i+1))
											@if($autogestao->where('a', true)->contains('instrumento', $i+1))
												<img src="../posicionamento/public/img/check.png" style="width: 20%;">
											@else
												<p><a href="/planoacao/{{$i+1}}" class="btn btn-info">@if($autogestao->whereNull('a')->contains('instrumento', $i+1)) Plano de Ação em aberto @else Sim @endif</a></p>
											@endif
										@endif
									</td>
									<td id="B{{$i}}" style="text-align: center;vertical-align: middle;">
											@if($autogestao->where('a', true)->contains('instrumento', $i+1))
												@if($autogestao->where('b', false)->contains('instrumento', $i+1))
												<p><a href="/planoacao/{{$i+1}}"><img src="../posicionamento/public/img/book-pa.png" style="width: 40%; cursor: pointer; margin-right: 2%" /></a>
												<a href="/autogestao/confirm/{{$i+1}}/B" class="btn btn-info">Sim</a></p>
												@else
												<img src="../img/check.png" style="width: 20%;">
												@endif
											@endif
									</td>
									<td id="C{{$i}}" style="text-align: center;vertical-align: middle;">
									@if($autogestao->where('b', true)->contains('instrumento', $i+1))
												@if($autogestao->where('c', false)->contains('instrumento', $i+1))
												<p><a href="/planoacao/{{$i+1}}"><img src="../posicionamento/public/img/book-pa.png" style="width: 40%; cursor: pointer; margin-right: 2%" /></a>
												<a href="/autogestao/confirm/{{$i+1}}/C" class="btn btn-info">Sim</a></p>
												@else
												<img src="../img/check.png" style="width: 20%;">
												@endif
											@endif
									</td>
									<td id="D{{$i}}" style="text-align: center;vertical-align: middle;">
									@if($autogestao->where('c', true)->contains('instrumento', $i+1))
												@if($autogestao->where('d', false)->contains('instrumento', $i+1))
												<p><a href="/planoacao/{{$i+1}}"><img src="../posicionamento/public/img/book-pa.png" style="width: 40%; cursor: pointer; margin-right: 2%" /></a>
												<a href="/autogestao/confirm/{{$i+1}}/D" class="btn btn-info">Sim</a></p>
												@else
												<img src="../img/check.png" style="width: 20%;">
												@endif
											@endif
									</td>
									<td id="E{{$i}}" style="text-align: center;vertical-align: middle;">
									@if($autogestao->where('d', true)->contains('instrumento', $i+1))
												@if($autogestao->where('e', false)->contains('instrumento', $i+1))
												<p><a href="/planoacao/{{$i+1}}"><img src="../posicionamento/public/img/book-pa.png" style="width: 40%; cursor: pointer; margin-right: 2%" /></a>
												<a href="/autogestao/confirm/{{$i+1}}/E" class="btn btn-info">Sim</a></p>
												@else
												<p><a href="/planoacao/{{$i+1}}"><img src="../posicionamento/public/img/book-pa.png" style="width: 40%; cursor: pointer; margin-right: 2%" /></a>
												<img src="../posicionamento/public/img/check.png" style="width: 20%;">
												@endif
											@endif
									</td>
								</tr>
								@endif
								@endfor
							</tbody>
						</table>
					</div>

					<br>

					<nav aria-label="Navegação de página exemplo" style="text-align: center;">
						<ul class="pagination justify-content-center">
							<!--<li class="page-item disabled">
      <a class="page-link" href="/$anterior" tabindex="-1">Anterior</a>
    </li> -->
							<li class="page-item"><a class="page-link" href="/introAcompanhamento">1</a></li>
							<li class="page-item active"><a class="page-link" href="/autogestao">2</a></li>

							<!-- <li class="page-item">
      <a class="page-link" href="/$proximo">Próximo</a>
    </li> -->
						</ul>
					</nav>

					<br>

					<center>
						<a href="/manual" type="submit" class="btn btn-primary btn-lg ">Guia do Usuário</a>
						<a href="/introAcompanhamento" type="submit" class="btn btn-primary btn-lg ">Autogestão da Metodologia</a>
						<a href="/inicioInstrumentos" type="submit" class="btn btn-primary btn-lg ">Instrumentos</a>
					</center>

					<br>

					<!-- <center><h2 style="color: #35408f">INSTRUMENTO 1</h2></center>
        
<center><h3 style="color: #35408f">Meu Nível de Empreendedorismo</h3></center>

<table border=1 cellpadding="7" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
    <td style="text-align: center;vertical-align: middle;" colspan="3">
			<p><strong>PLANO DE A&Ccedil;&Atilde;O PARA IMPLANTAR AS RECOMENDA&Ccedil;&Otilde;ES</strong></p>
			</td>
		</tr>
		<tr>
      <td style="text-align: center;vertical-align: middle;">
			<p><strong>ETAPAS (O QUE FAZER)</strong></p>
			</td>
			<td style="text-align: center;vertical-align: middle;">
			<p><strong>COMO FAZER</strong></p>
			</td>
      <td style="text-align: center;vertical-align: middle;">
      <p><strong>QUANDO DEVO CONCLUIR AS RECOMENDA&Ccedil;&Otilde;ES</strong></p>
			</td>
		</tr>
		<tr>
			<td>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</td>
			<td>
			  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</td>
			<td>
			  <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</td>
		</tr>
	</tbody>
</table> -->






		</div>
	</div>
</body>

</html>