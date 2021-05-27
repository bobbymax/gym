@extends('layouts.access')

@section('content')
    <div class="col-md-6">
        <div class="authincation-content">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="auth-form">
                        <div class="text-center mb-3">
                            <a href="index.html"><img src="/images/logo-full.png" alt=""></a>
                        </div>
                        <h4 class="text-center mb-4">Sign in your account</h4>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf


                            <div class="form-group">
                                <label for="staff_no" class="mb-1"><strong>Staff Number</strong></label>
                                <input type="text" id="staff_no" class="form-control @error('staff_no') is-invalid @enderror" name="staff_no" value="{{ old('staff_no') }}" required autocomplete>

                                @error('staff_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="password" class="mb-1"><strong>Password</strong></label>
                                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                @enderror
                            </div>


                            <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox ml-1">
                                        <input type="checkbox" class="custom-control-input" id="basic_checkbox_1" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
