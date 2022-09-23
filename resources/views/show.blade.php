<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Homeruns</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
   
      
    <h1>名前:{{ $profile->name }}</h1> <h5>[編集]</h5>
    <div class='location'>
        <h4>ホームバッティングセンター</h4>
        <p>何打ち:{{ $profile->box }}</p>
    </div>
    <div class='body'>
        <h2>自己紹介:{{ $profile->body }}</h2>
    </div>
    <div>
        <h5>現在のホームラン数{{ $profile->run }}</h5>
        <h5>質問</h5>
       
     
    </div>
    <div class='back'>[<a href='/kojin'>戻る</a>]</div>
    </body>
</html>
