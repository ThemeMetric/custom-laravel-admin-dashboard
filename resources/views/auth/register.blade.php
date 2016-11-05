@extends('layouts/dashboard.app')
@section('content')
    <form class="form-horizontal" id="registerForm" role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                <input id="name" type="text" class="form-control form-control-danger" placeholder="Enter Name" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif

        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                <input id="email" type="email" class="form-control form-control-danger" placeholder="Enter email" name="email" value="{{ old('email') }}" required>

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

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

                <input id="password-confirm" type="password" class="form-control form-control-danger" placeholder="Confirm Password" name="password_confirmation" required>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif

        </div>

        <div class="form-group">

                <button type="submit" class="btn btn-login btn-full">
                    Register
                </button>

        </div>
    </form>

@endsection
