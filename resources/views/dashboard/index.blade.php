<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>
    @if(session('user'))
    <div>
        Welcome, {{ session('user')}} <br>
        Account Type: {{ session('accountType')}}
    </div>
@endif
    <button onclick="window.location.href = '{{ route('logout') }}'">Logout</button>
</body>
</html>