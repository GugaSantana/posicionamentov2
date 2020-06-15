<center>
@if(in_array(\Auth::user()->role_id, [1, 2]))
<a href="/manual" type="submit" class="btn btn-primary btn-lg " >Guia do Usuário</a>
@endif
<a href="/introAcompanhamento" type="submit" class="btn btn-primary btn-lg " >Autogestão da Metodologia</a>
<a href="/inicioInstrumentos" type="submit" class="btn btn-primary btn-lg " >Instrumentos</a>
</center>