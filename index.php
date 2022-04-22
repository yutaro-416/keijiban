<!DOCTYPE html>
<html lang="ja">

<head>    
    <meta charset="UTF-8">
    <title>4each掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header_blog">
        <img src="4eachblog_logo.jpg">
    </div>

    <div class="menu">
        <header>      
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
    </div>

<main>
<div class="maincontens">
    <div class="left">
    <h1 class = "page_top">プログラミングに役立つ掲示板</h1>



<form method = "post" action = "insert.php">

    <div>
        <h3 class = "form_top">入力フォーム</h3>
        
        <label>ハンドルネーム</label>
        <br>
        <input type = "text" class = "text" size = "45" name = "handlename">
    </div>

    <br>

    <div>
        <label>タイトル</label>
        <br>
        <input type = "text" class="text" size = "45" name = "title">
    </div>

    <br>

    <div>
        <label>コメント</label>
        <br>
        <textarea cols = "80" rows = "7" name = "comments"></textarea>
    </div>
    
    <br>

    <div>
        <input type = "submit" class = "submit" value = "投稿する">
    </div>
    

    <br>
</form>

<br>


<?php

    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;" , "root", "");
    $stmt = $pdo -> query("select*from 4each_keijiban");


    while ($row = $stmt -> fetch()){

    echo "<div class='kiji'>";
    echo "<h3>".$row['title']."</h3>";
    echo "<div class ='comments'>";
    echo $row['comments'];
    echo "<br>";
    echo "<div class = 'handlename'>posted by".$row['handlename']."</div>";
    echo "<br>";
    echo "</div>";
    echo "</div>";
    echo "<br>";

    }



?>





        
            </div>
        </div>
    </div>

    <div class="right">
        <ul class="list_1">
            <h2>人気の記事</h2>
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>今人気のエディタTop5</li>
            <li>HTMLの基礎</li>
        </ul>
        <ul class="list_1">
            <h2>オススメリンク</h2>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
        </ul>
        <ul class="list_1">
            <h2>カテゴリ</h2>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>
    </div>
</div>
</main>

<footer>
    copyright© internous │ 4each blog the which provides A to Z about programming
</footer>

</body>