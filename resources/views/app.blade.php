<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="/css/all.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        @include('partials.flash')

        @yield('content')
    </div>
    
    <script src="/js/all.js"></script>
    
    @yield('footer')
</body>
</html>