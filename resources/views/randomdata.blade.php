<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Data</title>
    <link rel="stylesheet" href="{{ asset('css/randomdata.css') }}">
</head>
<body>
    <div id="app">
        <h1>Random Data</h1>
        <ul>
            @foreach($users as $user)
                <li>{{ $user['first_name'] }} {{ $user['last_name'] }}</li>
            @endforeach
        </ul>
    </div>

    <script src="{{ asset('js/randomdata.js') }}"></script>
</body>
</html>
