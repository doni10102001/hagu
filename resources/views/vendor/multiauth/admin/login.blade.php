@extends('multiauth::layouts.login') 
@section('title')
Hagu | Login Admin
@stop
@section('content')
<div class="container-login100">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
        <form class="login100-form validate-form" form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Admin Login') }}">
            @csrf
            <span class="login100-form-title p-b-33">
                Admin Login
            </span>

            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <input class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Email" value="{{ old('email') }}"> 
                <span class="focus-input100-1"></span>
                <span class="focus-input100-2"></span>
                @if ($errors->has('email'))
                <span class="invalid-feedback text-danger" role="alert">
                    <strong><small>{{ $errors->first('email') }}</small></strong>
                </span> @endif
            </div>

            <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                <input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">
                <span class="focus-input100-1"></span>
                <span class="focus-input100-2"></span>
                @if ($errors->has('password'))
                <span class="invalid-feedback text-danger" role="alert">
                    <strong><small>{{ $errors->first('password') }}</small></strong>
                </span> @endif
            </div>

            <div class="container-login100-form-btn m-t-20">
                <button class="login100-form-btn" type="submit">
                    Sign in
                </button>
            </div>

            <div class="text-center p-t-45 p-b-4">
                <span class="txt1">
                    Lupa
                </span>

                <a href="{{ route('admin.password.request') }}" class="txt2 hov1">
                    Password?
                </a>
            </div>
        </form>
    </div>
</div>
@endsection