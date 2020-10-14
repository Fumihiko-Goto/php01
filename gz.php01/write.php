<?php
$name = $_POST['name'];    //input.phpから飛んできた情報を受取りname変数に格納
$sex = $_POST['sex'];      //input.phpから飛んできた情報を受取りsex変数に格納
$mail = $_POST['mail'];    //input.phpから飛んできた情報を受取りmail変数に格納

// ファイルに書き込み
$time = date("Y-m-d H:i:s");   //date関数を使い日付を取得してtime変数に格納
$str = $time . ' / ' . $name . ' / ' . $sex. ' / ' . $mail;  //time,name,sex,mail変数の情報をまとめてstr変数に代入


//文字作成
$file = fopen('./data/data.txt', 'a');  //aという方法（ファイルがないと自動作成する方法）でdata.txtファイルをOPEN
fwrite($file, $str . "\n");         //$file変数(data.txt)に8行目で定義した$strの情報を書き込みして改行させる。
fclose($file);         //ファイル閉じる→ 表示は31行目のHTMLで処理



?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <p><?= $str ?></p>    <!-- write.phpをブラウザ画面でinput.phpから飛んできた情報を$strとまとめて表示  -->
                          <!-- 上の ?= でPHPをHTMLで表示してる-->
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
