<?php
// POSTで飛んできた情報を受け取る
// POSTの場合はパスワードも送ってみる。
$name = $_POST['name'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];

function h($str){  //htmlspecialchars関数を省略した関数を作る
    return htmlspecialchars($str, ENT_QUOTES);
}

?>

<html>
<head>
    <meta charset="utf-8">
    <title>POST（受信）</title>
</head>

<body>    <!-- htmlspecialchars関数でHTML入力を文字列に変える仕様にしてイタズラに対処できる -->
    お名前：<?= htmlspecialchars($name, ENT_QUOTES) ?>    <!-- PHPで受け取ったname情報を表示 -->
    EMAIL：<?= htmlspecialchars($mail, ENT_QUOTES) ?>    <!-- ?= はechoの省略版コード -->
    パスワード：<?= h($pass) ?>        <!-- 8行目で作成した関数を使いhtmlspecialcharsを実現する方法 -->
    
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
