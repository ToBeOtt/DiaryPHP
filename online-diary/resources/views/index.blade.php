<!DOCTYPE html>
<html>
<head>
    <title>Varbi diary</title>
</head>
<body>
    <h1>This is a personal diary, please log in to view it.</h1>

    @auth
    <!-- If user is logged in, show logout button -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
    @else
        <!-- If user is not logged in, show login button -->
        <a href="{{ route('auth.login-page') }}" class="btn btn-primary">Go to Login Page</a>
    @endauth
</body>
</html>