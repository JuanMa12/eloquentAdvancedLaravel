<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h3>{{count($books)}} Books</h3>
    <form action="{{url('/destroy')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <td>Title</td>
                <td>Description</td>
                <td>Category</td>
                <td>Select for Delete</td>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->title}}</td>
                    <td>{{$book->description}}</td>
                    <td>{{$book->category->name}}</td>
                    <td class="text-center"><input type="checkbox" name="ids[]" value="{{$book->id}}"></td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-center">
                    <input class="btn btn-primary" type="submit" value="Eliminar">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
</body>
</html>