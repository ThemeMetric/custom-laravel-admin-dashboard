@extends('layouts/dashboard.app')
@section('content')
    <form class="form-horizontal" id="loginForm" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control form-control-danger" name="email" placeholder="Enter email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif

        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                <input id="password" type="password" class="form-control form-control-danger" placeholder="Enter Password" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif

        </div>

        <div class="form-group">

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>

        </div>

        <div class="form-group">

                <button type="submit" class="btn  btn-login btn-full">
                    Login
                </button>

                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                    Forgot Your Password?
                </a>

        </div>
    </form>

@endsection
