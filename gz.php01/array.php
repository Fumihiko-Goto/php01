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
            <li>配列の書き方を確認(出力の仕方も確認)</li>
            <li>var_dumpを使う</li>
            <li>(演習)配列名'loveFood'で、自分の好きな食べ物3つの配列を作成。echoで、一番好きなものを出力</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <!-- ↓ここから -->
<?php 
$ary = ['東京', 'oosaka', '愛知'];
//var_dump($ary);    //配列の表示の型
//var_dump($ary[0]); //0番目の部屋だけ表示
$ary[] = '福岡';      //配列を追加する
var_dump($ary);
echo '</br>';         //改行だけ
$loveFood = ['家系ラーメン','ポテト','寿司'];
echo $loveFood[0];
?>

    <!-- ↑ここまで -->
</body>

</html>
