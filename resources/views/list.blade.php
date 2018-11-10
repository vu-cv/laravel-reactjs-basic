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
                    @foreach($data as $sv)
                    <tr>
                        <td>{{ $sv->id }}</td>
                        <td>{{ $sv->name }}</td>
                        <td>{{ $sv->email }}</td>
                        <td>{{ $sv->phone }}</td>
                        <td style="display: flex;">
                            <a href="{{ route('sinhvien.show', $sv->id) }}" class="btn btn-primary btn-xs">Chi tiết</a>
                            <a href="{{ route('sinhvien.edit', $sv->id) }}" class="btn btn-info btn-xs">Sửa</a>
                            {!! Form::open(['route' => ['sinhvien.destroy', $sv->id], 'method' => 'DELETE']) !!}
                            <button onclick="return confirm('Bạn chắc chắn xóa?')" type="submit" class="btn btn-danger btn-xs">Xóa</a>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="{{ route('sinhvien.create') }}" class="btn btn-primary">Thêm</a>
        </div>
    </body>
</html>
