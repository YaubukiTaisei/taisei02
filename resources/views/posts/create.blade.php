<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>就活easy</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
    </head>
    <h1 class="p-4 mb-4 text-blue-900 font-bold bg-blue-100">就活easy</h1>
     <x-app-layout>
     <body>
        <form action="/posts" method="POST"> 
          @csrf
          <div class='decoration-solid mb-6 ml-10'>
              <label for="company_name">企業名</label>
              <input type="text" id="company_name" name="post[company_name]" required minlength="1" maxlength="20" placeholder="企業名を入力してください" />
          </div>
          <diV class='decoration-solid mb-6 ml-2'>
              <label for="evaluation_id">企業の評価</label>
              <select id="evaluation_id" name="post[evaluation_id]">
                  <option value="">企業に対する評価を1～5で選んでください</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
              </select>
          </div>
          <div class='decoration-solid mb-6 ml-14'>
              <label for="occupation">職種</label>
              <input type="text" id="occupation" name="post[occupation]" required minlength="1" maxlength="20" placeholder="例）総合職"/>
          </div>
          <div class='decoration-solid mb-6 ml-4'>
              <label for="selecyion_type_id">選考タイプ</label>
              <select id="selection_type_id" name="post[selection_type_id]">
                  <option value="">選考の種類を以下から選んでください</option>
                  <option value="1">一次選考</option>
                  <option value="2">二次選考</option>
                  <option value="3">三次選考</option>
                  <option value="4">最終選考</option>
              </select> 
          </div>
          <div class='question decoration-solid mb-6 ml-5'>
              <label for="result_id">選考結果</label>
              <select id="result_id" name="post[result_id]">
                  <option value="">あなたの最終選考結果を以下から選んでください</option>
                  <option value="1">一次選考通過</option>
                  <option value="2">二次選考通過</option>
                  <option value="3">三次選考通過</option>
                  <option value="4">最終選考</option>
                  <option value="5">内定</option>
                　<option value="6">内定辞退</option>
              </select> 
          </div>
          <div class='decoration-solid mb-6 ml-14'>
              <label for="question">質問</label>
              <input type="body" id="question" name="post[question]" required size="90" /> 
          </div>
          <div class='decoration-solid mb-6 ml-14'>
              <label for="question">回答</label>
              <input type="body" id="answer" name="post[answer]" required size="90"/>   
          </div>
          <div class="flex justify-left items-center gap-4 ml-40">
              <input type="submit" name="送信"/>
        </form>
          <div class='footer'>
            <a href="/">戻る</a>
          </div>
         </div>
     </body>
     </x-app-layout>
</html>