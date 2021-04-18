@extends('layouts.guest')

@section('title', 'Reset Password')

@section('content')
<h2>Reset Password</h2>
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

<form action="{{ url('reset-password') }}" method="post">
    @csrf
    <input type="hidden" name="token" value="{{ $request->route('token') }}">
    <div>
        <label for="email">Email</label>
        <input type="email" id="name" name="email" value="{{ old('email', $request->email) }}" autofocus>
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
        <button>Reset Password</button>
    </div>
</form>
<br>
@endsection
