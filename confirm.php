<?php
require_once('menu.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Check TotalPrice</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>注文内容確認</h2>
    <?php $totalPayment = 0; ?>

    <?php foreach ($menus as $menu): ?>
      <?php 
        $orderCount = $_POST[$menu->getName()];
        // $menuに対して、$orderCountを引数としてsetOrderCountメソッドを呼び出してください
        $menu->setOrderCount($orderCount);

        $totalPayment += $menu->getTotalPrice();

        ?>
      <p class="order-amount">
          <!-- メニューの中の各品々 -->
        <?php echo $menu->getName() ?>
        x
        <!-- 注文数 -->
        <?php echo $orderCount ?>
        個
      </p>
      <!-- 小計 -->
      <p class="order-price"><?php echo $menu->getTotalPrice() ?>円</p>
    <?php endforeach ?>
      <!-- 合計 -->
    <h3>合計金額：<?php echo $totalPayment ?>円</h3>
  </div>
</body>
</html>

