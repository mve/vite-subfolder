<!doctype html>
<html lang="en">
<head>
    <title>@yield('title') | {{ config('app.name') }}</title>
    @include('includes.v3.head')
</head>

<body id="app">
@include('includes.v3.header')
<div>
    @yield('content')
</div>
@include('includes.v3.footer')

@vite(['../Modules/Filter/Resources/assets/sass/app.scss', '../Modules/Filter/Resources/assets/js/app.js'])
</body>
</html>
