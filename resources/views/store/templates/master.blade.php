<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{$title or 'Plazza Pet'}}</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link href="//fonts.googleapis.com/css?family=Roboto:100,300,300italic,400,500,700,900%7CRoboto+Condensed:400,700&amp;subset=latin,latin" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('assets/css/extras.min.css')}}">
    <style type="text/css" media="screen">
        .section-upper-footer {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/theme.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/shop.css')}}">

    <!-- CSS Personalizada -->
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{url('assets/images/logoplaza.png')}}">
  </head>
  <body class="pace-on pace-dot">

      @include('store.templates.header')
      <div class="container">
          @yield('content')
      </div>

      <!-- JS Dinâmicos -->
      @stack('scripts')

      <!-- Footer -->
      @include('store.templates.footer')
      <script src="{{url('assets/js/holder.js')}}"></script>
      <script src="{{url('assets/js/theme.min.js')}}"></script>
  </body>
</html>
