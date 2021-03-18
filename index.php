<?php 
require_once('menu.php') 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Awesome</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <!-- お店のタイトルの自体 -->
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
  <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Awesome</h1>
    <!-- <img src="assets/img/coffee1.jpeg" alt="coffee"> -->
    <!-- 注文内容の確認画面に飛ぶ -->
    <form method="post" action="confirm.php">
      <div class="menu-items">
        <?php 
        foreach ($menus as $menu): 
        ?>
          <div class="menu-item">
          <!-- <img src="assets/img/coffee1.jpeg" alt="coffee"> -->
            <img src="
            <?php 
            // 画像の呼び出し
            echo $menu->getImage() 
            ?>
            " class="menu-item-image">
            <h3 class="menu-item-name">
            <?php 
            // 初期値は食べ物
            echo $menu->getName() 
            ?>
            </h3>
            <p class="price">¥
            <?php 
            echo $menu->getTaxPrice() 
            ?>
            （税込）</p>
            <input type="text" value="0" name="
            <?php 
            // echo $menu->getName() 
            ?>">
            <span>個</span>
          </div>
        <?php 
        endforeach 
        ?>
      </div>
      <!-- 注文ボタン -->
      <input type="submit" value="注文する">
    </form>
  </div>
</body>
</html>