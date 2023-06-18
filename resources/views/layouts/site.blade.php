<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- CSS FILES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="/assets/css/bootstrap-icons.css" rel="stylesheet">

  <link href="/assets/css/templatemo-festava-live.css" rel="stylesheet">

</head>

<body>
  @yield('content')


  <!-- JAVASCRIPT FILES -->
  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/jquery.sticky.js"></script>
  @yield('click-scroll')
  <script src="/assets/js/custom.js"></script>

</body>

</html>
