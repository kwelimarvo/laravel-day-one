<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="grid place-items-center bg-gray-300">

    <section class="text-2xl font-bold bg-teal-400 p-2 text-white">
        Laravel Day One 
    </section>

    <div class="text-4xl my-3 font-bold underline">
        <h1>Environment Configuration</h1>
    </div>
    
    <div class="bg-red-400 p-3 shadow-md rounded-md cursor-pointer">
        <p >The application environment is : {{App::environment()}}
    </div>
    
    <div class="text-4xl my-3 font-bold underline">
        <h1>Accessing Configuration Values</h1>
    </div>

    <div class="bg-green-400 p-3 shadow-md rounded-md cursor-pointer">
        <p >The timezone is : {{config('app.timezone')}}
    </div>
    </body>
</html>