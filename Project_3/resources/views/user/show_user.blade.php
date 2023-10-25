<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Użykowinik</title>
</head>
<body>
<h3>Dane użykowinka</h3>
{{print_r($user)}}<hr>
Imię i nazwisko: {{$user['firstName']}} {{$user['lastName']}}<br>
Miasto: {{$user['city']}}<br>
Hobby:
{{--{{print_r($user['hobby'])}}<br>--}}
{{--
hobby 1: {{$user['hobby'][0]}}<br>
hobby 2: {{$user['hobby'][1]}}<br>
hobby 3: {{$user['hobby'][2]}}<br>
--}}
<ul>
@foreach ($user['hobby'] as $hobby)
    <li>{{ $hobby }}</li>
@endforeach
</ul>
</body>
</html>