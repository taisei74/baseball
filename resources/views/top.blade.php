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
        <div class='title'>
        <h1>バッティングセンターでホームランを打とう</h1>
        </div>
        <div class='btn'>
            <input type='button' value='ゲスト'/>
            <input type='button' value='ユーザー'/>
        </div>
        <div class='homerun'>
            <h4>[<a href='/kojin'>ホームラン数(個人)</a>]</h4>
            <h4>[<a href='/place'>ホームラン数(場所)</a>]</h4>
        </div>    
    </body>
</html>
