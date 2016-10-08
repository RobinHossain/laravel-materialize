@extends('layouts.login')

@section('content')
    <form class="login-form" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="input-field col s12 center">
                <a id="logo-container" href="#!" class="brand-logo circle responsive-img valign profile-image-login">Login CRM</a>
            </div>
        </div>

        <div class="row margin {{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="input-field col s12">
                <i class="fa fa-user prefix"></i>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                <label for="email" class="">E-Mail Address</label>
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        </div>


        <div class="row margin {{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="input-field col s12">
                <i class="fa fa-lock prefix"></i>
                <input id="password" type="password" name="password" required>
                <label for="password" class="">Password</label>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12 m12 l12  login-text">
                <input type="checkbox" id="remember-me" name="remember">
                <label for="remember-me">Remember me</label>
            </div>
        </div>


        <div class="row">
            <div class="input-field col s12">
                <button type="submit" class="btn waves-effect waves-light col s12 light-green">Login</button>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 m6 l6">
                <p class="margin medium-small"><a href="{{ url('/register') }}">Register Now!</a></p>
            </div>
            <div class="input-field col s6 m6 l6">
                <p class="margin right-align medium-small"><a href="{{ url('/password/reset') }}">Forgot password ?</a></p>
            </div>
        </div>

    </form>
@endsection
