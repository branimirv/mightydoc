<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mighty Doc</title>

    <link href="{{ elixir('css/back.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
    <script src="{{ elixir('js/all.js') }}"></script>
</head>
<body>
    @include('layouts.partials.main-menu')
    <div class="container">
    @yield('content')
    </div>


</body>
</html>