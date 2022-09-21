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
  <?php
  $rank = 1;
  $cnt = 1;
  $previous_point = 0;
  $ranking = '';
  $ranking .= '<table>';
  $ranking .= '<tr><th>順位</th><th>ユーザー名</th><th>ホームラン数</th><th>自己紹介</th></tr>';
  foreach($homeruns as $homerun){
     if($previous_point != $homerun['hon']){
        $rank = $cnt;}
    if ($rank >= 3){
        break;
    }
    $ranking .= '<tr>';
    $ranking .= '<td class="rank">'.$rank.'</td>';
    $ranking .= '<td>'.  $homerun->user['name'] .' さん'.'</td>';
    $ranking .= '<td>'.  $homerun['hon']. '本'.'</td>';
    $ranking .= '<td>'.  print  '<a href="https://67d8ab0dd458470cbc81cbc80c979d56.vfs.cloud9.us-west-1.amazonaws.com/kojin/show">'. '自己紹介' . '</a>' .'</td>';
    $ranking .= '</tr>';
   
   $cnt++;
   
  }
  $ranking .= '</table>';
  echo $ranking;
   
  ?>
       <div calss='back'>[<a href='/'>戻る</a>]</div>
    </body>
</html>
