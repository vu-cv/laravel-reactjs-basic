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
                <div class="col-sm-4 col-sm-push-4">
                    <form action="{{asset('/api/sinhvien') }}" method="POST" role="form">
                        <legend>Create</legend>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>


                    
                        
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
