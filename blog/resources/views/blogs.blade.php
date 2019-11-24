<html>
    <head>
        <title>Blogs</title>

        <style>

            .page-item{
                display: inline-block;
                padding: 10px;
            }

        </style>

    </head>

    <body>
        <h1>Blogs</h1>
        <ul>
        @foreach ($posts as $post)
            <li>{{$post->title}}</li>
        @endforeach
        </ul>
        <div>
            {{$posts->links()}}
        </div>
    </body>
</html>