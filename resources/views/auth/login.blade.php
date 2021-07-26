@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
          <center>
            <div class="card" style="width:330px;">
            <center>
              <img src="https://1.bp.blogspot.com/-8Dm3ThIvss8/YJkx26zBFuI/AAAAAAAAAEI/p_DkdqIyr0opUs-4mUcILz_JzcXVfSHNgCLcBGAsYHQ/s0/1516587899302.jpg" style="max-width: 200px; height:auto; ">
            </center>
                <div class="card-header" style="font-family: 'Rubik', sans-serif;">{{ __('SpenyosiLite') }}</div>
                <center>
                <div class="card-body" style="width:330px; padding-bottom:0px;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mb-0 " style="margin-bottom:0px;">
                            <!-- <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> -->
                            <div class="">
                              <font size="1">
                                <input id="email" placeholder="{{ __('E-Mail Address') }}" type="email" style="  width:100%;;" class="mb-0 form-control @error('email') is-invalid @enderror border border-primary w-100" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                              </font>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group" style="margin-top: 0px;">
                            <!-- <label for="password" style="padding-top:0px;" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> -->
                            <div class="" style="margin-top: 0px;">
                                <input id="password" placeholder="{{ __('Password') }}" type="password" class="mt-0 form-control @error('password') is-invalid @enderror border border-primary w-100" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-">
                                <div class="form-check">
                                    <input class="form-check-input float-start" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label float-start" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-6">
                                <button type="submit" style="width:90px;" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-md-8">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link float-start" style="" href="{{ route('password.request') }}">
                                      <font size="2">
                                        {{ __('Forgot Your Password?') }}
                                      </font>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
              </center>
            </div>
          </center>
        </div>
    </div>
</div>
@endsection
