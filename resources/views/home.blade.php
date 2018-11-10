<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Quản lý sinh viên</title>
        


        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        
        <script type="text/javascript" src="{{asset('public/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/js/react.development.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/js/react-dom.development.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/js/browser.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/js/create-react-class.min.js')}}"></script>
        <script type="text/javascript" src="https://unpkg.com/create-react-class@15.6.0-rc.0/create-react-class.min.js"></script>
        

    </head>
    <body>
        <div id="root"></div>
        <script type="text/babel" src="{{asset('public/js/script.js')}}"></script>
    </body>
</html>
