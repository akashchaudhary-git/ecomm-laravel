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

    <style>
        html,body{
            background-color:#fff;
            position: relative;
            height:  100%;
            margin:  0px auto;
            padding: 0px auto;
            overflow-y: auto;
            overflow-x: hidden;
        }
        
    
        .wrapper{
            position: relative;
            height: auto;
            min-height: 100%;
            
        }

        .form-container{
            margin: 50px 0;
            z-index: 3;
        }
        

        .login-container{
            color: #7b8ab8;
            border-radius: 25px;
            background-color: #d9e3f1;
            border: none;
            box-shadow: 5px 5px 10px rgba(55,94,148,.2),-5px -5px 10px rgba(255,255,255,.4);
            padding: 30px 30px 20px 30px;
            margin: 20px;
        }

        .trending-products-section{
            display: flex;
            margin: 20px 30px;
            overflow-x: scroll;
        }
        .list-item{
            float:left;
            width: 250px;
            margin: 8px;
            border-radius: 10px;
        }
        .trending-product-container {
            width:100%;
            height: 320px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            {{--  padding: 20px;  --}}
        }
        .price-section{
            width: 250px;
            height:50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .list-item:hover{
            box-shadow: 5px 5px 10px rgba(55,94,148,.2),-5px -5px 10px rgba(255,255,255,.4);
        }
        .trending-product-image {
            
            height: 150px;
            padding: 0 15px;
        }
        .trending-product-desc{
            padding: 15px;
            
        }
        .trending-product-desc h4{
            font-size: 16px;
            text-align: center;
            
        }

        .trending-product-price-tag {
            margin-bottom: 15px;
            {{--  background:rgba(0,0,0,.4);
            padding: 6px 15px;
            border-radius: 25px;
            box-shadow: 5px 5px 10px rgba(55,94,148,.2),-5px -5px 10px rgba(255,255,255,.4);
            display: flex;
            justify-content:center;
            align-items:center;
            bottom: 0;  --}}
        }
        .space{
            height: 75px;
        }

        .footer{
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            clear: both;
        }

        .display-product-image{
            width: 500px;
            padding: 50px;
        }

        .row.product-details{
            margin: 100px 50px;
        }

        .img-container {
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 100px;
            box-sizing: border-box;
            max-height: 600px;
        }
        {{--  .product-details .desc{
            box-shadow: 2px 2px 6px rgba(109,114,121,.2), -3px -2px 4px rgba(255,255,255,.2);
            background: #f5f7fa;
        }  --}}

        .product-container{
            box-shadow: 2px 2px 6px rgba(109,114,121,.2), -3px -2px 4px rgba(255,255,255,.2);
            background: #f5f7fa;
            padding:50px;
        }
        .product-title{
            padding-left: 0;
            margin-bottom: 20px;
        }

        .searched-items{
            padding-bottom : 150px; 
        }
        .item{
            margin:20px;
        }
        
        .item:hover{
            border-top: 1px solid rgba(90,150,148,0.1);
            border-left:1px solid rgba(90,150,148,0.1);
            background-color: #d9e3f1;
            box-shadow: 5px 5px 10px rgba(55,94,148,.2),-5px -5px 10px rgba(255,255,255,.4);
        }
    </style>
    
</head>
<body>
    <div class="wrapper">
        {{ View::make('header') }}

    
    @yield('content')
    {{ View::make('footer') }}
    </div>






{{-- 
|-----------------------------------------------------------------
|   Scripts
|-----------------------------------------------------------------
--}}

 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js' integrity='sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==' crossorigin='anonymous'></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js' integrity='sha512-NWNl2ZLgVBoi6lTcMsHgCQyrZVFnSmcaa3zRv0L3aoGXshwoxkGs3esa9zwQHsChGRL4aLDnJjJJeP6MjPX46Q==' crossorigin='anonymous'></script>  
</body>
</html>