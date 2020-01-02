<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
   <link rel="stylesheet" href="http://127.0.0.1/cdn/bootstrap/css/bootstrap.min.css">

    @yield('style')
</head>
<body>

@include('inc.header')


<div class="container">
@yield('content')
</div>











 <script src="http://127.0.0.1/cdn/jquery/jquery.min.js"></script>
 <script src="http://127.0.0.1/cdn/bootstrap/js/bootstrap.min.js"></script>
 <script src="http://127.0.0.1/cdn/select2/js/select2.min.js"></script>

 @yield('script')
</body>
</html>