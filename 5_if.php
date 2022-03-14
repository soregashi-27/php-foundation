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
    if (TRUE) {
        $a = 'It is true.';
        echo $a;
    }
    echo 'except function';

    if (TRUE || FALSE ) {
        $x = 5 + 3;
        echo $x;
         echo '<br/>';
    }
    echo '論理和の本質は原則true. 例外としてfalse';

    if (TRUE && FALSE ) {
        $b = 5 + 3;
        echo $b;
         echo '<br/>';
    }
    echo '論理積の本質は原則false. 2つの条件がそろったらTrue';

    //比較演算は正しい時にTrue、間違ってるときにfalse。
    //sample
    var_dump(1 < 2);
    echo '<br/>';
    var_dump(2 < 3);

    //イコール2つの比較はしないこと
    //必ずイコールで比較をする場合は3つ使うこと。
    var_dump(1 === '1');

     ?>

</body>

</html>