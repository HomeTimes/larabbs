<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <!-- resources/js/bootstrap.js 文件中提供的 Axios HTTP 库会使用 cookie 中加密的 XSRF-TOKEN 的值然后在请求时自动发送 X-XSRF-TOKEN 标头 -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>

  <!-- Styles -->
  <link href="{{mix('css/app.css') }}" rel="stylesheet">

</head>

<body>
  <div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')

    <div class="container">

      @include('shared._messages')

      @yield('content')

    </div>

    @include('layouts._footer')
  </div>

  <!-- Scripts -->
  <script src="{{mix('js/app.js') }}"></script>
</body>

</html>
