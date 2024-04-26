<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }
    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    h2 {
        text-align: center;
    }
    input[type="email"], input[type="password"],input[type="text"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    input[type="submit"],button {
        width: 100%;
        background: #007bff;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 3px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background: #0056b3;
    }
</style>
</head>
<body>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

@if(session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@endif
<div class="container">
    <h2>Login</h2>
    <form action="{{Route('loginAttempt')}}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
    <button onclick="window.location.href = '{{ route('registration') }}'">Registration</button>

</div>
</body>
</html>
