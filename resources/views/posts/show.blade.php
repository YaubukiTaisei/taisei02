<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>就活easy</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
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
            @auth
            <!-- Post.phpに作ったisLikedByメソッドをここで使用 -->
            @if (!$post->isLikedBy(Auth::user()))
                <span class="likes">
                    <i class="fas fa-heart like-toggle" data-post-id="{{ $post->id }}"></i>
                <span class="like-counter">{{$post->likes_count}}</span>
                </span><!-- /.likes -->
            @else
                <span class="likes">
                    <i class="fas fa-heart heart like-toggle liked" data-post-id="{{ $post->id }}"></i>
                <span class="like-counter">{{$post->likes_count}}</span>
                </span><!-- /.likes -->
            @endif
            @endauth
            <div class='edit'>
               <a href="/posts/edit/{{ $post->id }}">編集</a>
            </div>
        <div class='footer'>
            <a href="/posts/index">戻る</a>
        </div>
        <script>
            $(function () {
    let like = $('.like-toggle'); //like-toggleのついたiタグを取得し代入。
    let likePostId; //変数を宣言
    like.on('click', function () { //onはイベントハンドラー
    
      let $this = $(this); //this=イベントの発火した要素＝iタグを代入
      likePostId = $this.data('post-id'); //iタグに仕込んだdata-post-idの値を取得
      //ajax処理スタート
      $.ajax({
        headers: { //HTTPヘッダ情報をヘッダ名と値のマップで記述
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        },  //↑name属性がcsrf-tokenのmetaタグのcontent属性の値を取得
        url: '/posts/like', //通信先アドレスで、このURLをあとでルートで設定します
        method: 'POST', //HTTPメソッドの種別を指定します。1.9.0以前の場合はtype:を使用。
        data: { //サーバーに送信するデータ
          'post_id': likePostId //いいねされた投稿のidを送る
        },
      })
      //通信成功した時の処理
      .done(function (data) {
        console.log('success');
        $this.toggleClass('liked'); //likedクラスのON/OFF切り替え。
        $this.next('.like-counter').html(data.post_likes_count);
      })
      //通信失敗した時の処理
      .fail(function () {
        console.log('fail'); 
      });
    });
});
        </script>
    </body>
</html>