<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

    <h1>Login</h1>

    <form method="POST" action="{{ route('login') }}">
        @csrf <!-- CSRF Protection -->
        
        <!-- Username/Email -->
        <div>
            <label for="username">Username or Email:</label><br>
            <input type="text" id="email" name="email" required>
        </div>
        
        <!-- Password -->
        <div>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required>
        </div>
        
        <!-- Submit Button -->
        <button type="submit">Login</button>
    </form>

</body>
</html>