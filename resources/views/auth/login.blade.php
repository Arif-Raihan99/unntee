@extends('errors.error')

@section('title')
    login
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
                <div class="card-header mb-0">
                    <div class="card-title mx-auto">Login Here</div>
                </div>
                <div class="card-body py-0">

                    <form action="{{ route('login') }}" method="POST">
                        @csrf

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

                        <div class="row mb-5">
                            <input type="submit" class="btn btn-success py-2 w-25" value="Login">
                        </div>
                    </form>

                    <div class="text-center mb-5">
                        <span class="text-info">If you are new here. <a href="{{ route('register') }}">SignUp</a> now.</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
