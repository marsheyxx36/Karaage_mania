<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Karaage Mania</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @if(Request::is('toppage'))
      <link rel="stylesheet" href="{{ asset('css/toppage.css') }}">
    @elseif(Request::is('index'))
      <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @elseif(Request::is('login','register'))
      <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    @elseif(Request::is('post'))
      <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    @elseif(Request::is('post/create'))
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    <script async src="https://maps.googleapis.com/maps/api/js?key="></script>
    <script src="{{asset('js/map.js')}}"></script>
    @endif
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
      
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- ヘッダー読み込み --}}
    @include('header')
    {{-- コンテンツ読み込み --}}
    @yield('content')
    {{-- フッター読み込み --}}
    @include('footer')
  </body>
</html>
