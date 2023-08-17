<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="">
        <h1 class="text-center text-2xl">Lista de usuarios</h1>
        <div class="container mx-auto">
            <p>Username: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
            <p>desde {{date('d/m/Y', strtotime($user->created_at))}}</p>
        </div>
    </body>
</html>
