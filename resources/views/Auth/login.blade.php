@extends('layouts.login')

@section('title', 'Логин')

@section('content')

    <style>
        .custom-button {
            width: 100%;
            font-size: 16px;
            padding: 10px;
            text-align: center;
        }
    </style>

    <h3 class="mb-4 text-center">Akkauntiz bormi?</h3>

    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" name="email">
        </div>
        <div class="form-group">
            <input id="password-field" type="password" class="form-control" placeholder="Password"
                   name="password">
            <span toggle="#password-field"
                  class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div>
        <div class="form-group">
            <button type="submit" class="form-control btn btn-primary submit px-3 custom-button">Sign In</button>
        </div>

    </form>

    <div class="social form-group">
        <a href="{{route('registerPage')}}" class="form-control btn btn-primary submit px-3 custom-button">
            Register</a>
    </div>

@endsection
