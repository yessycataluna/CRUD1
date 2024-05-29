<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <div class="main-wrapper">
            @include('shared.header')
            <div class="main content">
                @yield('content')
            </div>
            @include('shared.footer')
        </div>
    </div>
</body>
</html>