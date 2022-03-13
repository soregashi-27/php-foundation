<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta
    http-equiv="X-UA-Compatible"
    content="IE=edge"
  >
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >
  <title>php-foundation</title>
</head>

<body>
  <?php
    //scara typeはString, Int, Float（少数）, Boolean（True or false, 論理値とも言う）
    //NULL型：慣例的には大文字で書くことになっているので注意。
    //NULLは何もできない特殊な型
    $x = NULL;

    //cast operator（単行演算子）
    //型変換の例
    //ドル to 円
    //1L to 1kg etc.

    //整数型の数字を文字型に変換。
    $y = (int) "a";

    //その上で、webブラウザに変換後の値を表示する
    var_dump($y);

    //phpは暗黙の型変換を行う言語なので、弱い型つけの言語という位置付け（cf. TypeScript）

    var_dump(1);
    //値と値の型をセットで表示してくれるfunction
    var_dump($x);
    //変数の調査目的はこれ使えると便利

     ?>

</body>

</html>