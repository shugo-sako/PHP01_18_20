<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>組み込み関数を知る</li>
            <li>if文と文と関数を組み合わせておみくじを作る</li>
            <li>(演習)自由におみくじをアレンジする</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    ※PHPの関数は、
    (例) print('ヒキスウ');
    みたいな感じで、関数（ヒキスウ）みたいな感じで使います。
    <!-- ここから -->

    <?php

    // 日付表示
    $today = date('西暦Y/m/d H:i');
    echo $today;

    // 文字置き換え
    $phoneNum = '090-0000-0000';

    $strRebase = str_replace('-' , '' , $phoneNum );

    // $strRebase  = rtrim

    //$rand = rand(1,4);
    $rand = rand(1,10);

   if($rand == 1 ){
       echo '大吉';
   } else if ($rand==2){
       echo'中吉';
   } else if($rand==3){
       echo'将吉';
   } else {
       echo'吉';
   }


    // ランダムな数字を表示する(rand)

    ?>
    <!-- ここまで -->
</body>

</html>
