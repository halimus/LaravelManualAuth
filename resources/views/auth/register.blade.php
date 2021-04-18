@extends('layouts.guest')

@section('title', 'Register')

@section('content')
<h2>Register</h2>
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

<form action="{{ route('register') }}" method="post">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" autofocus>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="name" name="email" value="{{ old('email') }}">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="">
    </div>
    <div>
        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" id="password_confirmation" name="password_confirmation" value="">
    </div>
    <div>
        <button>Register</button>
    </div>
</form>
<p><a href="{{ url('login') }}">Already have an account? Sign in</a></p>
@endsection
