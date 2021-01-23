
<?php

// var_dump($_POST);
$name = $_POST['name'];
$mail = $_POST['mail'];

echo $name;
echo'<br>';
echo $mail;
// POSTを受け取る
// POSTの場合はパスワードも送ってみる。

function h($str)
{
    return htmlspecialchars($str , ENT_QUOTES);
}

?>
<html>

<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>
    お名前：<?= h($name) ?>
    EMAIL：<?= h($mail) ?>
    パスワード：
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
