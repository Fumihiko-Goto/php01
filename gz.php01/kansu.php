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
    <!-- ここから -->
<?php

    // 日付表示
$today = date('Y年m月d日 H時i分s秒');   //date関数を使用
$today2 = date('Y/m/d H:i');          //date関数を使用する方法2
echo $today;
echo '<br>';  //改行
echo $today2;
echo '<br>';  //改行
    // 文字置き換え
    $phoneNum = '090-0000-0000 ';                  //電話番号
    $strReBase = str_replace('-', '', $phoneNum);  // - をなくす方法
    echo $strReBase;

    $strReBase = rtrim($strReBase);  //最後のスペースを取り除く方法
    echo $strReBase;
    echo '<br>';
    // ランダムな数字を表示する(rand)
    $rand = rand(1, 2);  //ランダム関数でこの場合は1と２をランダムに出力する

    if ($rand == 1) {    //おみくじ

        echo '大吉';
    
    } else {

        echo '大凶';

    }



    ?>

    <!-- ここまで -->
</body>

</html>
