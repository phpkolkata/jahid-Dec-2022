<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@if ($errors->has('email'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif

@if ($errors->has('msg'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('msg') }}</strong>
    </span>
@endif


@if(Session::has('msg'))
<p class="alert alert-info">{{ Session::get('msg') }}</p>
@endif

   <form action="/login-check" method="post">
    @csrf()
    User: <input type="text" name="email"><br>
    Password: <input type="password" name="password"><br>
    <button>Login</button>
</form>



</body>
</html>
