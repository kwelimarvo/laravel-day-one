<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="grid place-items-center bg-amber-300">
    <section class="container mx-auto">
        Laravel Day One 
    </section>

    <p class="bg-red-400 p-3 shadow-md rounded-md cursor-pointer">The application environment is : {{App::environment()}}
</body>
</html>