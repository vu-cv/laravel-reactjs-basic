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
        

    </head>
    <body>
        <div class="container">
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td style="">

                            <a href="" class="btn btn-info btn-xs">Sửa</a>
                            <button onclick="return confirm('Bạn chắc chắn xóa?')" type="submit" class="btn btn-danger btn-xs">Xóa</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a href="" class="btn btn-primary">Thêm</a>
        </div>
        <script type="text/javascript" src="{{asset('public/js/script.js')}}"></script>
    </body>
</html>
