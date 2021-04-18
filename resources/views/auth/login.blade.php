@extends('layouts.guest')

@section('title', 'Login')

@section('content')
<h2>Login</h2>
@if($errors->any())
<div>
    <div>Something went wrong!</div>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session('status'))
<div>
    {{ session('status') }}
</div>
@endif

<form action="{{ route('login') }}" method="post">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="email" id="name" name="email" value="{{ old('email') }}">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="">
    </div>
    <div>
        <label for="remember">
            <input type="checkbox" id="remember" name="remember">
            <span>Remember Me</span>
        </label>
    </div>
    <div>
        <button>Login</button>
    </div>
</form>
<br>
<p><a href="{{ route('password.request') }}">Forgot Password?</a></p>
<p><a href="{{ url('register') }}">Register New Account</a></p>
@endsection
