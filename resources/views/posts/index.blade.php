<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>就活easy</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        <h1>体験記を探す</h1>
        <a href="/posts/create">・体験記を投稿する</a>
        <div class='posts'>
            @foreach($posts as $post)
               <div class='post'>
                  <a href="/posts/{{ $post->id }}"><h2 class='company_name'>{{ $post->company_name }}</h2></a>
                   <p class='selection_type_id'>{{ $post->selection_type->type }}</p>
                   <p class='occupation'>{{ $post->occupation }}</p>
                   <p class='evaluation_id'>{{ $post->evaluation_id }}</p>
                   <p class='result_id'>{{ $post->result->process }}</p>
                   <p class='question'>{{ $post->question }}</p>
                   <p class='answer'>{{ $post->answer }}</p>
               </div>
            @endforeach
        </div>
       
          
          
    </body>
</html>