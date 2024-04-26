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
    input[type="text"], input[type="password"],input[type="email"],select {
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
<div class="container">
    <h2>Registration</h2>
    <form action="{{Route('store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <select name="status">
            <option value="0">Agent</option>
            <option value="1">Broker</option>
        </select>
        <input type="submit" value="Register">
    </form>
    <button onclick="window.location.href = '{{ route('/') }}'">Login</button>

</div>
</body>
</html>