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
        <div class="container mt-5">
            <h1>Post Listing</h1>
            <a href="{{route('post.create')}}" class="btn btn-success">Add New</a>
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">is_active</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count = 1 ?>
                    @foreach ($data as $val)
                    <tr>
                        <td> {{ $count++ }} </td>
                        <td> {{ "ID - " . $val->id }} </td>
                        <td> {{ $val->title }} </td>
                        <td> {{ $val->description }} </td>
                        <td>
                        <input class="form-check-input" type="checkbox" onclick="return false;" name="is_active" value=""{{($val->is_active) == 1 ? ' checked' : ''}} >
                        </td>
                        <td>
                            
                            <a href="{{route('post.edit',$val->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('post.show',$val->id)}}" class="btn btn-success">View</a>
                            <form action="{{route('post.destroy',$val->id)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                            </form>
                        
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </body>
</html>
