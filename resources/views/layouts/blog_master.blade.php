<html>
      <head>
      </head>
      <body>
            <div class="container">
                  <header class="row">
                        @include('includes.blog_navbar')
                  </header>
                  <div id="main" class="row">
                        @yield('content')
                  </div>
                  <footer class="row">
                        @include('includes.blog_footer')
                  </footer>
            </div>
      </body>
</html>