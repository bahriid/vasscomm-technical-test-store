@extends('components.auth.layout',[
    'title' => 'Register'
])

@section('content')
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
            </div>
            @if (session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {!! session('error') !!}
                </div>
            @endif
            <form method="POST" action="{{ route('register') }}" class="user">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" name="name"
                           placeholder="Enter Full Name...">

                    @error('name')
                    <span class="text-danger fs-6">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email"
                           placeholder="Enter Email Address...">

                    @error('email')
                    <span class="text-danger fs-6">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password">

                    @error('password')
                    <span class="text-danger fs-6">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Password">

                    @error('password_confirmation')
                    <span class="text-danger fs-6">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                </button>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{route('register')}}">Create an Account!</a>
            </div>
        </div>
    </div>
@endsection
