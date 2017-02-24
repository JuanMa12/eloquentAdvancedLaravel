<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h3>{{count($categories)}} Categories</h3>
    <ul>
        @foreach($categories as $category)
            <li>
                {{$category->name}}({{$category->numberBooks}})
                <ul>
                    @foreach($category->books as $book)
                        <li>
                            <strong>{{$book->title}}:</strong>
                            {{$book->description}}
                            <a href="#">({{$book->status}})</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>