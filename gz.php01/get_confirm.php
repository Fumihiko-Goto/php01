<?php
// GETで送られてきた名前とアドレスのデータを受け取る
$name = $_GET['name'];
$mail = $_GET['mail'];
// (演習)名前、アドレス以外の情報を追加して送ってみましょう（性別、年齢）
?>

<html>

<head>
    <meta charset="utf-8">
    <title>GET練習（受信）</title>
</head>

<body>
    <p>お名前：<?= $name ?> </p>   <!-- HTML内でPHPを表示させる省略バージョン  -->
    <p>Mail：<?= $mail ?></p>
    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>

</html>
