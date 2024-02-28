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
               <h3>企業名</h3>
                   <h2 class='company_name'>{{ $post->company_name }}</h2>
               <h3>選考タイプ</h3>
                   <h3 class='selection_type_id'>{{ $post->selection_type_id }}</h3>
            　 <p>職種</p>
                   <p class='occupation'>{{ $post->occupation }}</p>
               <p>企業の評価</p>  
                   <p class='evaluation_id'>{{ $post->evaluation_id }}</p>
               <p>選考結果</p>  
                   <p class='result_id'>{{ $post->result_id }}</p>
               <P>質問</P>   
                   <p class='question'>{{ $post->question }}</p>
               <P>回答</P>
                   <p class='answer'>{{ $post->answer }}</p>
            </div>
        </div>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>