<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{asset('/assets/css/tailwind.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/admin.css')}}">


    

</head>
<body>
    <div class=" h-screen bg-grey-lightest">
        @yield('main-content')
    </div>
</body>
</html>