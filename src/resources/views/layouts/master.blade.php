<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Crybos')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-800 text-white">

<div class="bg-gray-900 p-2.5">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="flex items-center w-1/2">
                <img src="{{ asset('images/logo.webp') }}" alt="Crybos Logo" class="w-10 h-10 mr-2.5">
                <span class="text-2xl font-bold">Crybos</span>
            </div>
            @if(Route::has('login'))
                @auth
                    Welcome, {{ auth()->user()->name }}
                @else
                <div class="w-1/2 text-right">
                    <a href="{{ route('login') }}" class="bg-blue-600 text-white py-2 px-4 rounded">Sign In</a>
                </div>
                @endauth
            @endif
        </div>
    </div>
</div>

<div class="container mx-auto p-4">
    @yield('content')
</div>

<div class="bg-gray-900 text-white text-center p-2.5">
    <div class="flex justify-between items-center">
        <div class="text-left">
            <p>Site written by Len Waugh in 2024.</p>
        </div>
        <div class="space-x-3">
            <a href="https://www.twitch.tv/" target="_blank" class="btn btn-primary">
                <i class="fab fa-twitch" style="color:#6441a5"></i> Twitch
            </a>
            <a href="https://www.youtube.com/" target="_blank" class="btn btn-danger">
                <i class="fab fa-youtube" style="color:#FF0000"></i> YouTube
            </a>
            <a href="https://twitter.com/" target="_blank" class="btn btn-info">
                <i class="fab fa-twitter" style="color:#1DA1F2"></i> Twitter
            </a>
        </div>
    </div>
</div>

</body>
</html>
