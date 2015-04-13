@extends('layouts.default')

@section('header')

    <meta name="Description" content="" />
    <meta name="Keywords" content="" />

@stop

@section('content')

    <h1>Rejestracja</h1>

    <form action="http://zpi.dev/index.php/registred" method="post">
        Login:
        <input type="text" name="login">
        <br>
        Hasło:
        <input type="password" name="haslo">
        <br>
        Powtórz hasło:
        <input type="password" name="haslo2">
        <br>
        E-mail:
        <input type="email" name="email">
        <br>
        Powtórz e-mail:
        <input type="email" name="email2">
        <input type="hidden" name="rola" value="2">
        <br>
        Imię:
        <input type="text" name="imie">
        <br>
        Data urodzenia:
        <input type="date" name="data_urodzenia">
        <br>
        Numer telefonu:
        <input type="tel" name="telefon">
        <br>
        Alternatywny numer telefonu:
        <input type="tel" name="nr_alternatywny">
        <br>
        Narodowość:
        <input type="text" name="kraj">
        <br>
        Język:
        <input type="text" name="jezyk">
        <br>
        Numer dokumentu(paszport, dowód osobisty):
        <input type="text" name="nr_dokumentu">
        <br>
        Numer ubezpieczenia:
        <input type="text" name="nr_ubezpieczenia">
        <br>
        <input type="checkbox" name="zgoda">Wyrażam zgodę...<br>

        <input type="submit" id="submit" value="Zarejestruj">
    </form>
    

@stop