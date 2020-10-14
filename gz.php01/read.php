<?php
// ファイルを開く
$openFile = fopen('./data/data.txt', 'r');     //readなのでrを書く
// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($openFile)){   //fgetsは1行ずつ読み込み終わるまで続ける関数
    echo nl2br($str);              //nl2br関数は<br¥>を作成する
}
// ファイルを閉じる
fclose($openFile);
