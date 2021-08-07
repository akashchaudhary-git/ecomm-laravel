<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>E-commerce project</title>

    {{--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/yeti/bootstrap.min.css" integrity="sha384-mLBxp+1RMvmQmXOjBzRjqqr0dP9VHU2tb3FK6VB0fJN/AOu7/y+CAeYeWJZ4b3ii" crossorigin="anonymous">  --}}

    {{--  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.0/quartz/bootstrap.css' />  --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.0/morph/bootstrap.min.css" integrity="sha512-kyDHBwDW1zUgovtPHu1Bm62GpalnJLTMXBqcb05Ocbg9x/LFvHMvD1DMLXwEt3CnVFioeKWaMoPvt3Pq0iSC2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    
</head>
<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}







{{-- 
|-----------------------------------------------------------------
|   Scripts
|-----------------------------------------------------------------
--}}

 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' integrity='sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==' crossorigin='anonymous'></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js' integrity='sha512-NWNl2ZLgVBoi6lTcMsHgCQyrZVFnSmcaa3zRv0L3aoGXshwoxkGs3esa9zwQHsChGRL4aLDnJjJJeP6MjPX46Q==' crossorigin='anonymous'></script>  
</body>
</html>