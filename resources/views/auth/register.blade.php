@extends('errors.error')

@section('title')
    register
@endsection

@section('content')
    <style>
        body {
            background-image: url("{{ asset('/') }}assets/media/auth/bg1.jpg");
        }
    </style>

    <div class="d-flex flex-column flex-center flex-column-fluid">
        <div class="d-flex flex-column flex-center px-10">
            <div class="card card-flush w-400px">
                <div class="card-header">
                    <div class="card-title py-0 mx-auto">Register Here</div>
                </div>
                <div class="card-body py-0">

                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="row form-group mb-5">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control" placeholder="Enter your name">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row form-group mb-5">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control" placeholder="Enter your email">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row form-group mb-5">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row form-group mb-5">
                            <label for="password1" class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" id="password1" class="form-control" placeholder="Retype password">
                            @error('confirm_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row form-group mb-5">
                            <label for="account_type" class="form-label">Account Types</label>
                            <label for="a1" class="col-6"><input type="radio" id="a1" class="me-1" name="account_type" value="job">Job Seeker</label>
                            <label for="a2" class="col-6"><input type="radio" id="a2" class="me-1" name="account_type" value="service">Service Seeker</label>
                            @error('account_type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-5">
                            <input type="submit" class="btn btn-success w-25 py-2" value="Register">
                        </div>
                    </form>
                    <div class="text-center mb-5">
                        <span class="text-info">If you have an account <a href="{{ route('login') }}">Login</a> here.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
