<?php
// ファイルに書き込み

$name = $_POST['name'];
$mail = $_POST['mail'];
$age = $_POST['age'];
$job = $_POST['job'];
$tel = $_POST['tel'];


$time = date('Y-m-d H:i:s');
$file = fopen('./data/data.txt', 'a');
fwrite($file, $time ." ". $name ." ". $mail ." ".$age ." ". $job ." ".$tel ."\n");
fclose($file);



function h($str)
{
    return htmlspecialchars($str , ENT_QUOTES);
}


//文字作成

?>

<?php

// session_start();

// $_SESSION["name"] = "山崎";
// $_SESSION["num"] = 10000;

// echo $_SESSION["name"];
// echo $_SESSION["num"];

?>




<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <p>data/data.txt を確認しましょう！</p>

    <p>お名前：<?= $name ?></p> 
    <p>Mail：<?= $mail ?></p>
    <p>age： <?= $age ?></p>
    <p>job： <?= $job ?></p>
    <p>tel： <?= $tel ?></p>
    <P>time: <?= $time ?></P>

    <ul>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>
