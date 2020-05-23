<nav aria-label="Navegação de página exemplo" style="text-align: center;">
  <ul class="pagination justify-content-center">
     <!--<li class="page-item disabled">
      <a class="page-link" href="/$anterior" tabindex="-1">Anterior</a>
    </li> -->
    <li class="page-item @if($pagina == 1)active @endif"><a class="page-link" href="/manual">1</a></li>
    <li class="page-item @if($pagina == 2)active @endif"><a class="page-link" href="/manual1">2</a></li>
    <li class="page-item @if($pagina == 3)active @endif"><a class="page-link" href="/manual2">3</a></li>
    <li class="page-item @if($pagina == 4)active @endif"><a class="page-link" href="/manual3">4</a></li>
    <li class="page-item @if($pagina == 5)active @endif"><a class="page-link" href="/manual4">5</a></li>
    
    <!-- <li class="page-item">
      <a class="page-link" href="/$proximo">Próximo</a>
    </li> -->
  </ul>
</nav>