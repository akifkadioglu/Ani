<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> @yield('title') </title>
    @yield('head')
    @livewireStyles
</head>

<body>
    @include('partials.navbar')
    <div class="p-2" style="margin-top: 150px">@include('partials.message')</div>
    <div class="p-2">@include('partials.errormessage')</div>
    @yield('content')
    @include('partials.footer')
    @livewireScripts
    @yield('footer')
</body>

@yield('javascript')

</html>
