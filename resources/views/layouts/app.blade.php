<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="icon" href="img/logo.png" type="image/icon type">
  @yield('style')
  <style>
    div {
      -webkit-user-drag: none;
    }
    ::-webkit-scrollbar {
      width: 5px;
    }
    ::-webkit-scrollbar-track {
      background-color: #eee;
    }
    ::-webkit-scrollbar-thumb {
      background: #999; 
      border-radius: 10px;
    }
    td, i, p, span, img, h1, h2, h3, h4, h5, th{
      user-select: none;
      -webkit-user-drag: none;
    }
    textarea {
      resize: none
    }
  </style>
  <title>Agerr Motor | {{ $title }}</title>
</head>
<body class="w-screen h-screen flex flex-col items-center">
  @include('partials.navbar')
  @yield('content')
  @include('partials.footbar')
</body>
</html>