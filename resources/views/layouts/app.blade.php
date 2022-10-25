<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Quickstart - Basic</title>
  <!-- Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
  <!-- Styles -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href='{{asset("/css/style.css")}}'>
</head>
<body id="app-layout">
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <h3>Laravel Example World project</h3>
        <a class="navbar-brand" href="{{ url('/') }}">Home </a>
        <a class="navbar-brand" href="{{ url('/countries') }}">Countries list</a>
        <a class="navbar-brand" href="{{ url('/cities') }}">Cities list</a>
        <a class="navbar-brand" href="{{ url('/continent') }}">Countries by Continent</a>
      </div>

      <div class="nav navbar-nav navbar-right" style="margin-top:30px;">
          <form action="{{url('/search')}}" method="GET">
            <input type="text" name="search" placeholder="country or continent" required>
            <button type="submit">Search</button>
          </form>
        </div>

    </div>
  </nav>
  <div class="content" >
  @yield('content')
  </div>
  <footer class="footer">
    <div class="container">
      <span class="text-muted">2022 Laravel World Project Design &copy Dmitry Krylov, JKTV21</span>
    </div>
  </footer>
  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- JavaScripts из папки resources\js и закрыто комментарием-->
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>