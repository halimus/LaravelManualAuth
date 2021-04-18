<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Manual Auth Example - @yield('title')</title>
</head>
<body>
    <div>
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li>
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <a href="#" onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
                </form>
            </li>
        </ul>
    </div>
    <div>
        @yield('content')
    </div>
</body>
</html>
