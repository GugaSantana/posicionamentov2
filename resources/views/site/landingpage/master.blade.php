<!DOCTYPE html>
<html lang="pt-br">

  <head>
    @include('site.head')
    
    @yield('site.css')
  </head>

  <body>

    @yield('site.content')

    {{-- @include('site.footer') --}}

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional Scripts -->
    <script src="{{ asset('js/custom.js') }}?v={{time()}}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>
    <script src="{{ asset('js/accordions.js') }}"></script>

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

    <!-- Google tag (gtag.js) Ads -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11264814598"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-11264814598');
    </script>


    <!-- Google tag (gtag.js) Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ED58Z8HKFD"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-ED58Z8HKFD');
    </script>

    @yield('site.js')

  </body>
</html>