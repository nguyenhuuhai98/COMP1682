@extends('auth.layout')


@section('content')
    <div class="p-3">
        <h4 class="text-muted font-18 m-b-5 text-center">Login</h4>

        <form class="form-horizontal m-t-30" method="POST" action="{{ route('login') }}">
            @csrf
            <input type="hidden" value="{{ \Illuminate\Support\Facades\URL::previous() }}" name="url">
            <div class="form-group">
                <label for="email" class="col-form-label text-md-right">Email</label>

                <div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror " name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>

                <div">
                    <input id="passwords" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row m-t-20">
                <div class="col-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="remember">Remember me</label>
                    </div>
                </div>
                <div class="col-6 text-right">
                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                </div>
            </div>

            @if (Route::has('password.request'))
                <div class="form-group m-t-10 mb-0 row">
                    <div class="col-12 m-t-20">
                        <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                    </div>
                </div>
            @endif
        </form>
    </div>
@stop
