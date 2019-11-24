<html>
    <head>
        <title>Form</title>
    </head>
    <body>

        <div>
            <ul>
                @foreach ($errors->all() as $e)
                    <li>{{$e}}</li>   
                @endforeach
            </ul>
        </div>

        <form action="form_submit" method="GET">
            @csrf
            <input type="text" name="user"/>
            @error('user')
            <div>
                {{$message}}
            </div>
            @enderror
            <br><br>
            <input type="password" name="password"/>
            <br>
            {{-- {{$errors->all()['password']}} --}}
            <br><br>
            <button type="submit">Submit</button>
        </form>
    </body>
</html>