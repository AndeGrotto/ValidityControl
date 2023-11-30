@extends('layouts.app')

<link rel="stylesheet" href="/css/style.css">
<script src="/js/scripts.js"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-2 button_line">
                                <button type="button" class=" btn btn-outline-default waves-effect" onclick="mostrarSenha()"><img id="olho" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAUCAQAAAAngNWGAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAJcEhZcwAAEQMAABEDAZuRafQAAAAHdElNRQfmCxAWJSoA4/JCAAABaklEQVQoz7XSwUuTARgH4Gcp0/wEbWyiC6HYzcDJGmPnUjyJpzzsOKF/oIPgpaNdvBkjEmGCFIRXBcNLYPERXgo6yEIplFWrU1As1jrsGxh49b2+D/zg975c9qSNgTHpi0G/AFSsi4lZVwGB/g64EsGyigBNkwKBSU0EKsr/w7o506gZNWzYqBqmzal3Q5fkMGjfrri8DQkJG/Lidu0bRM5SjyfmvfHJN9e88sdXt2S8dawla9MHU6qmyAodGkfRY6+d+qvlp/fWFDHuUCjb44vQiCNlDxx55LsZMXF1n92XcibpoXei1rbsyBtR8FRbW1tDzm07tqJmkfRcVQp3NLQi+NtdpFQ9k+zAWScK4KaPEWuruQEKTsx24IBVeybAokYUvAgm7Fk10A0PrAgt6EPRsmVF9FkQWomOG02vkgPbSjKGDMko2XagpLcDYufwdffMSGgi7oeXXjjtLs9DuCotiYYzvy73o/8BQXFnMglbIPMAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjItMTEtMTZUMjI6Mzc6MzgrMDA6MDADEvPRAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIyLTExLTE2VDIyOjM3OjM4KzAwOjAwck9LbQAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAAASUVORK5CYII="/></button>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembre-de mim') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu sua senha?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
