<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>就活easy</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <body class="antialiased">
        <h1 class='企業名'>
            {{ $post->company_name }}
        </h1>
        <div class='content'>
            <div class='content_post'>
            　 <p>職種</p>
                   <p class='occupation'>{{ $post->occupation }}</p>
               <p>企業の評価</p>  
                   <p class='evaluation_id'>{{ $post->evaluation_id }}</p>
               <p>選考タイプ</p>
                   <p class='selection_type_id'>{{ $post->selection_type->type }}</p>
               <p>最終選考結果</p>  
                   <p class='result_id'>{{ $post->result->process }}</p>
               <P>Q.</P>   
                   <p class='question'>{{ $post->question }}</p>
               <P>A.</P>
                   <p class='answer'>{{ $post->answer }}</p>
            </div>
            <div class='edit'>
               <a href="/posts/edit/{{ $post->id }}">編集</a>
            </div>
        <div class='footer'>
            <a href="/posts/index">戻る</a>
        </div>
    </body>
</html>