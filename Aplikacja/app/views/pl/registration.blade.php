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
        <input type="password" name="password">
        <br>
        Powtórz hasło:
        <input type="password" name="password2">
        <br>
        E-mail:
        <input type="email" name="email">
        <br>
        Powtórz e-mail:
        <input type="email" name="email2">
        <input type="hidden" name="role" value="2">
        <br>
        Imię:
        <input type="text" name="first_name">
        <br>
        Data urodzenia:
        <input type="date" name="date_of_birth">
        <br>
        Numer telefonu:
        <input type="text" name="phone_number">
        <br>
        Alternatywny numer telefonu:
        <input type="text" name="alt_phone">
        <br>
        Narodowość:
        <input type="text" name="country">
        <br>
        Język:
        <input type="text" name="language">
        <br>
        Numer dokumentu(paszport, dowód osobisty):
        <input type="text" name="doc_number">
        <br>
        Numer ubezpieczenia:
        <input type="text" name="insurance_num">
        <br>
        <input type="checkbox" name="agree">Wyrażam zgodę na przetwarzanie danych...<br>

        <input type="submit" id="submit" value="Zarejestruj">
    </form>
    

@stop