@extends('layouts.app')

@section('auth_content')

  <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
    <div class="login-wrapper wd-400 wd-xs-450 pd-25 pd-xs-40 bg-white rounded shadow-base">
      <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Fanatech <span class="tx-normal">]</span></div>
      <div class="tx-center mg-b-60">Please Provide Your Valid Information</div>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" autofocus>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div><!-- form-group -->

          <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
              @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div><!-- form-group -->

            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input ml-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label ml-1" for="remember">
                  {{ __('Remember Me') }}
                </label>
              </div>
            </div><!-- form-group -->
            <button type="submit" class="btn btn-info btn-block">Sign In</button>

            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}" class="tx-info tx-12 d-block mg-t-20">Forgot password?</a>
            @endif

{{--            <div class="mg-t-60 tx-center">Not yet a member? <a href="{{ route('register') }}" class="tx-info">Sign Up</a></div>--}}
          </form>
        </div><!-- login-wrapper -->
      </div><!-- d-flex -->
@endsection
