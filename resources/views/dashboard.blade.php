@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<h2>Dashboard</h2>
<div>
    This is the logged in view
</div>
<br>
<div>
    Welcome: {{ Auth::user()->name }} <br>
    User Id: {{ Auth::id() }} <br>
    User Name: {{ Auth::user()->name }} <br>
    Email: {{ Auth::user()->email }} <br>
</div>

@endsection







