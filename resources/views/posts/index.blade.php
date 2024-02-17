<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>体験記を探す</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        <h1>体験記を探す</h1>
        <div class='posts'>
            @foreach($posts as $post)
            <div class='posts'>
                <h2 class='question'>{{ $post->question }}</h2>
                <p class='answer'>{{ $post->answer }}</p>
            </div>
            @foreach
        </div>
    </body>
</html>