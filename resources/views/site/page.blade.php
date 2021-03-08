<!DOCTYPE html>
<html lang="pt-br">

  <head>
    @include('site.head')
    
    @yield('site.css')
  </head>

  <body>

    @include('site.header')

    @yield('site.content')

    @include('site.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="../js/custom.js?v={{time()}}"></script>
    <script src="../js/owl.js"></script>
    <script src="../js/slick.js"></script>
    <script src="../js/accordions.js"></script>

    <!-- Sweet alert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

    @yield('site.js')

  </body>
</html>