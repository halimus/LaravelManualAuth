@extends('layouts.guest')

@section('title', 'Forgot Password')

@section('content')
<h2>Forgot Password</h2>
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

<form action="{{ url('forgot-password') }}" method="post">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="email" id="name" name="email" value="{{ old('email') }}" autofocus>
    </div>
    <div>
        <button>Email Password Reset Link</button>
    </div>
</form>
<br>
<p><a href="{{ route('login') }}">Back to Login</a></p>
@endsection
