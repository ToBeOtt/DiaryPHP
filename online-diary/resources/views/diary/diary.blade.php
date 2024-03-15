<!DOCTYPE html>
<html>
<head>
    <title>Diary</title>
</head>
<body>
    <h1>Welcome to my diary</h1>
    <p>This is my custom index page.</p>

    @auth
    <!-- If user is logged in, show logout button -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
    @endauth
</body>
</html>