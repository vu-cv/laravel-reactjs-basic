<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        


        <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        
        <script type="text/javascript" src="{{asset('public/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/js/react.development.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/js/react-dom.development.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/js/browser.min.js')}}"></script>
        

    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>Chi tiết</h1>
                <div class="col-sm-4">
                    <ul>
                        <li>id: {{ $data->id }}</li>
                        <li>name: {{ $data->name }}</li>
                        <li>email: {{ $data->email }}</li>
                        <li>phone: {{ $data->phone }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
