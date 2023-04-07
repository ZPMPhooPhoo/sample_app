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
            <h1>New Blogs </h1>
            
            <form method="post" action="{{ route('blogs.store')}}" class="mt-3">
                @csrf
            <div class="form-group mt-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
                
            </div>
            <div class="form-group mt-3">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" placeholder="Enter description">
                
            </div>
            <div class="form-group mt-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="is_active" id="inlineRadio1" value="0" checked>
                    <label class="form-check-label" for="inlineRadio1">in active</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="is_active" id="inlineRadio2" value="1">
                    <label class="form-check-label" for="inlineRadio2">is active</label>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
            
            </form>
        </div>
        
    </body>
</html>
