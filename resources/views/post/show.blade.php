<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container mt-5 col-6">
            <h1>Show Post </h1>
            
            <form method="post" class="mt-3">
                @csrf
                <table class="table table-light mt-3">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">description</th>
                        <th scope="col">is_active</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {{ $count = 1 }} </td>
                            <td> {{ "ID - " . $data->id }}</td>
                            <td> {{ $data->title }} </td>
                            <td> {{ $data->description }} </td>
                            <td>
                            <input class="form-check-input" type="checkbox" onclick="return false;" name="is_active" value=""{{($data->is_active) == 1 ? ' checked' : ''}} >
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{route('post.index')}}" class="btn btn-primary">Back</a> 
            </form>
        </div>
    </body>
</html>
