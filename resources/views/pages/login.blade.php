@extends('templates.layout')
@section('authTitle', 'Login')
@section('autreStyle')

@endsection

@section('content')

<div class="page-content pb-0">

    <div data-card-height="cover-full" class="card mb-0" style="background-image:url(assets/images/pictures/1l.jpg)">
        <div class="card-center">

            <div class="text-center">
                <p class="font-600 color-highlight mb-1 font-16">Let's Get Started</p>
                <h1 class="font-40 color-white">Sign In</h1>
            </div>

            <div class="content px-4">
                <div class="input-style input-transparent no-borders has-icon validate-field mb-4">
                    <i class="fa fa-user"></i>
                    <input type="name" class="form-control validate-name" id="form1a" placeholder="Username">
                    <label for="form1a" class="color-highlight">Username</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>
                <div class="input-style input-transparent no-borders has-icon validate-field mb-4">
                    <i class="fa fa-lock"></i>
                    <input type="password" class="form-control validate-password" id="form1a" placeholder="Password">
                    <label for="form1a" class="color-highlight">Password</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>

                <a href="#" data-back-button class="btn btn-full btn-l font-600 font-13 gradient-highlight mt-4 rounded-s">Sign In</a>

                <div class="row pt-3 mb-3">
                    <div class="col-6 text-start font-11">
                        <a class="color-white opacity-50" href="{{ route('pwdperdu') }}">Mot de passe perdu?</a>
                    </div>
                    <div class="col-6 text-end font-11">
                        <a class="color-white opacity-50" href="{{ route('inscription') }}">S'inscrire</a>
                    </div>
                </div>

            </div>

        </div>
        <div class="card-overlay bg-black opacity-85"></div>
    </div>



</div>

@endsection
