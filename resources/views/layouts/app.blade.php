<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EVIDENCIJA POSILJKI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">

<body>
    <header>
        @include('inc.navbar')
    </header>
    <div class="jumbotron">
    @include('inc/messages')
    @yield('content')
</div>
</body>


</html>
