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
        <div class='posts'>
          <div> 
              <label for="company_name">企業名</label>
              <input type="text" id="company_name" name="name" required minlength="1" maxlength="20" placeholder="企業名を入力してください" />
          </div>
          <diV>
              <label for="evaluation_id">企業の評価</label>
              <select id="evaluation_id">
                  <option value="">企業に対する評価を1～5で選んでください</option>
                  <option value="stars">1</option>
                  <option value="stars">2</option>
                  <option value="stars">3</option>
                  <option value="stars">4</option>
                  <option value="stars">5</option>
              </select>
          </div>
          <div>
              <label for="occupation">職種</label>
              <input type="text" id="occupation" name="name" required minlength="1" maxlength="20" placeholder="例）総合職"/>
          </div>
          <div>
              <label for="selecyion_type_id">選考タイプ</label>
              <select id="selection_type_id">
                  <option value="">選考の種類を以下から選んでください</option>
                  <option value="type">一次選考</option>
                  <option value="type">二次選考</option>
                  <option value="type">三次選考</option>
                  <option value="type">最終選考</option>
              </select> 
          </div>
          <div>
              <label for="result_id">選考結果</label>
              <select id="result_id">
                  <option value="">あなたの最終選考結果を以下から選んでください</option>
                  <option value="process">一次選考通過</option>
                  <option value="process">二次選考通過</option>
                  <option value="process">三次選考通過</option>
                  <option value="process">最終選考</option>
                  <option value="process">内定</option>
                　<option value="process">内定辞退</option>
              </select> 
          </div>
          <div>
              <label for="question">質問</label>
              <input type="body" id="question" name="name" required size="90" /> 
          </div>
          <div>
              <label for="question">回答</label>
              <input type="body" id="answer" name="name" required size="90"/>   
          </div>
          <div>
              <input type="submit" name="送信"/>
          </div>
    
          
            
            @foreach($posts as $post)
                <div class='post'>
                    <h2 class='question'>{{ $post->question }}</h2>
                    <p class='answer'>{{ $post->answer }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>