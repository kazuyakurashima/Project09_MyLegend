<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_start(); // セッション開始

// セキュリティ対策のためのファイルを読み込む
require_once '../functions/security.php'; // パスを修正

// アイテムデータを読み込む
require_once 'data.php';

// セッションからデータを取得
$player = $_SESSION['player'] ?? null;
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ギークマーケット</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
  <!-- ファビコン設定 -->  
  <link rel="icon" type="image/png" href="./img/fab-theSupper.png">
</head>
<body>
  <div class="menu-wrapper container">
    
    <!-- register_prosessで登録した名前を使って「いらっしゃいませ「name」様と表記させる -->
    <p class="menu-wrapper">
      いらっしゃいませ <?php echo h($player['name']); ?> 様
    </p>

    <h1 class="logo">ジーズ専用！秘密のギークマーケット</h1>







    <form action="confirm.php" method="post">

        <div class="menu-items">
        <!-- 配列$menusの要素を変数$menuとするforeach(endforeachを活用）で記入 -->
        <?php foreach($menus as $menu):?>
            <div class="menu-item">
                <img src="<?php echo $menu->getImage()?>" alt="image">
                <h3 class="menu-item-name"><?php echo $menu->getName()?></h3>
                <p class="price">¥<?php echo $menu->getTaxIncludedPrice()?>(税込)</p>
                <!-- <input>タグで入力ボックスを作成（繰り返す） -->
                <!-- ここで入力された値（orderCount)は、nameで識別していますよ！！！ -->
                <input type="text" value="0" name="<?php echo $menu->getName()?>">
                <span>個</span>
            </div>
        <?php endforeach ?>
        </div>
        <!-- <input>タグで送信ボタンを作成 -->
        <input type="submit" value="注文する">
    </form>
  </div>
</body>
</html>