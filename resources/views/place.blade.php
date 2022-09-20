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
    <div class='place_ranking'>
       @foreach($places as $place)
        <h1>ホームラン数(場所)</h1>
        <h2>1位:{{ $place->name }} {{ $place->kazu }}本</h2>
        <h2>2位</h2>
        <h2>3位</h2>
        <h2>4位</h2>
        <h2>5位</h2>
        @endforeach
    </div>
        <div calss='back'>[<a href='/'>戻る</a>]</div>
    </body>
</html>
