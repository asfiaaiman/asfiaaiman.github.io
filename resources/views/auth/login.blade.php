@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card bg-secondary border-0 mb-0">
                <div class="card-body px-lg-5 py-lg-5">
                    <div class="text-center text-muted mb-4"></div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input type="email" class="form-control " name="email" tabindex="1"
                                    required id="email" placeholder="xyz@gmail.com">
                            </div>
                            <div class="invalid-feedback">

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control" placeholder="Password" type="password" name="password" required
                                    value="123456" tabindex="2">
                            </div>
                            <div class="invalid-feedback">

                            </div>
                        </div>
                        <div class="custom-control custom-control-alternative custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                id="remember">
                            <label class="custom-control-label" for="remember">
                                <span class="text-muted" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember
                                    me</span>
                            </label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">Sign in</button>
                        </div>

                    </form>
                </div>
            </div>
            @if (Route::has('password.request'))
                <div class="row mt-3">
                    <div class="col-12 text-right">

                        <a href="{{ route('password.request') }}" class="text-light"><small>Forgot
                                password?</small></a>
                    </div>
                </div>
            @endif

        </div>
    </div>
    </div>
@endsection
