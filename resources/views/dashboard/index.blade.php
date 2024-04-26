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
        Welcome, {{ session('user')->name}} <br>
        Account Type: {{ session('user')->status == 0 ? 'Agent' : 'Broker' }}
    </div>
@endif
    <button onclick="window.location.href = '{{ route('logout') }}'">Logout</button>
</body>
</html>