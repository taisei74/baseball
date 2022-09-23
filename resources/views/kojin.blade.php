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
    <div class='kojin_ranking'>
        <h2>ホームラン数(個人)</h2>
        @foreach($profiles as $index=>$profile)
        <div>
        <p>{{ $index + 1 }}位
       <a href='/kojin/{{ $profile->id }}'> {{ $profile->name }} </a> 
        {{ $profile->run }}本</p>
        </div>
       
        @endforeach
    </div>
        <div calss='back'>[<a href='/'>戻る</a>]</div>
    </body>
</html>
