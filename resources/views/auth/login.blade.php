@extends('components.auth.layout',[
    'title' => 'Login'
])

@section('content')
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
            </div>
            @if (session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {!! session('error') !!}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}" class="user">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control form-control-user" name="email"
                           id="exampleInputEmail" aria-describedby="emailHelp"
                           placeholder="Enter Email Address...">

                    @error('email')
                    <span class="text-danger fs-6">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" name="password"
                           id="exampleInputPassword" placeholder="Password Confirmation">

                    @error('password')
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
