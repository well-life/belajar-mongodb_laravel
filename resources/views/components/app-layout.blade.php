<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/person-style.css') }}" rel="stylesheet">
    <title>{{ $title }}</title>
</head>

<body>
    <section>
        {{ $slot }}
    </section>
</body>

</html>
