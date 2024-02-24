
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<br> <br>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-info ">
            <div class="panel-body">

        <form action="{{ route('post-login') }}" method="post" role="form">
            @csrf
            <legend style="text-align: center"> LOGIN </legend>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" name="email">
                @error('email')<small style="color: red">{{$message}}</small> @enderror
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="password">
                @error('password')<small style="color: red">{{$message}}</small> @enderror
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-success">Login</button>
            <button class="btn btn-warning"><a href="{{route('home-register')}}">Register</a></button>
        </form>

        </div>
        </div>

    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
