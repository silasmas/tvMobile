@extends('templates.layout')
@section('authTitle', 'Pwd perdu')
@section('autreStyle')

@endsection

@section('content')

<div class="page-content pb-0">

    <div data-card-height="cover-full" class="card mb-0 bg-34">
        <div class="card-center">
            <div class="text-center">
                <p class="font-600 color-highlight mb-1 font-16">Reset Account</p>
                <h1 class="font-40 color-white">Forgot</h1>
                <p class="boxed-text-xl color-white opacity-50 pt-3 font-15">
                     Enter your email account associated with your account and we'll send you the reset instructions!
                </p>
            </div>

            <div class="content px-4">
                <div class="input-style input-transparent no-borders has-icon validate-field mb-4">
                    <i class="fa fa-at"></i>
                    <input type="email" class="form-control validate-name" id="form1a" placeholder="Email">
                    <label for="form1a" class="color-highlight">Email</label>
                    <i class="fa fa-times disabled invalid color-red-dark"></i>
                    <i class="fa fa-check disabled valid color-green-dark"></i>
                    <em>(required)</em>
                </div>

                <a href="#" data-back-button class="btn btn-full btn-l font-600 font-13 gradient-highlight mt-4 rounded-s">Send Reset Instructions</a>

                <div class="row pt-3 mb-3">
                    <div class="col-6 text-start font-11">
                        <a class="color-white opacity-50" href="{{ route('logine') }}">Se connecter</a>
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
