<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
    <title>POST課題</title>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>(演習)password欄を作って受け取る。</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <P>write.phpへ送る</P>

    <form action=" write.php " method="post">
        お名前: <input type="text" name="name"><br>
        EMAIL: <input type="mail" name="mail"><br>
        年齢：<input type ="number" name="age"><br>
        職業：<input type="text" name="job"><br>
        電話番号：<input type="tel" name="tel"><br>
        
        <!-- パスワード欄を追加してみる。 -->
        <input type="submit" value="送信">
    </form>
</body>

</html>
