@extends('layouts.default')

@section('header')

    <meta name="Description" content="" />
    <meta name="Keywords" content="" />

@stop

@section('content')

    <h1>Login</h1>

    <form action = "http://zpi.dev" method="post">
        Login:
        <input type="text" name="login">
        <br>
        Hasło:
        <input type="password" name="password">
        <br>
        <input type = "submit" id="submit" value = "Zaloguj">
    </form>
    <br>
    <br>
    <h1>Nie masz jeszcze konta?</h1>
    <h1><a href="http://zpi.dev/registration">Zarejestruj się!</a></h1>

@stop