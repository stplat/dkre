<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{!! $title ?? '' !!}</title>
  {{-- <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/32.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/16.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/96.png') }}"> --}}
  <link href="{{ asset('css/view-auth.css') }}" rel="stylesheet">
</head>
<body>
@yield('content')
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
