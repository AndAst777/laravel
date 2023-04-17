<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}";>
    <title>Document</title> 
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <h1>Вход </h1>
    <form method="POST" action="{{route('user.login')}}">
@csrf
<div class="form-group">
    <label for="email">Ваш email</label>
<input class="form-control" id="email" name="email" type="text" value="" placeholder="Email">
@error('email')
    <div class="alert alert-danger">{{$message}}</div>
@enderror
</
<div class="form-group">
    <label for="email">Пароль</label>
<input class="form-control" id="password" name="password" type="text" value="" placeholder="Пароль">        
@error('password')
    <div class="alert alert-danger">{{$message}}</div>
@enderror
</div>  
<div class="form-group">
    <button class="btn" type="submit" name="sendMe" value="1">Войти</button>
</div>
    </form>
</body>
</html>