<!DOCTYPE html>
<html>
  <head>
    @include('includes.head')
  </head>
  <body>
    <div class="container">

      <header>
        @include('includes.header')
      </header>

      <nav class="navbar navbar-default">
        @include('includes.navbar')
      </nav>

      <div>
        @yield('content')
      </div>

      <footer>
        @include('include.footer')
      </footer>
    </div>
  </body>
</html>
