<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>就活easy</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        <h1>体験記を投稿</h1>
            <label for="company_name">企業名</label>
            <input type="text" id="company_name" name="name" required minlength="1" maxlength="20" placeholder="企業名を入力してください"/
        <div class='posts'>
            @foreach($posts as $post)
                <div class='post'>
                    <h2 class='question'>{{ $post->question }}</h2>
                    <p class='answer'>{{ $post->answer }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>