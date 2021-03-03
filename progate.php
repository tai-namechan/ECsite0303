<?php 
// require_once('data.php') 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Awesome</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Awesome</h1>
    <form method="post" action="confirm.php">
      <div class="menu-items">
        <?php foreach ($menus as $menu): ?>
          <div class="menu-item">
            <img src="<?php echo $menu->getImage() ?>" class="menu-item-image">
            <h3 class="menu-item-name"><?php echo $menu->getName() ?></h3>
            <p class="price">¥<?php echo $menu->getTaxIncludedPrice() ?>（税込）</p>
            <input type="text" value="0" name="<?php echo $menu->getName() ?>">
            <span>個</span>
          </div>
        <?php endforeach ?>
      </div>
      <input type="submit" value="注文する">
    </form>
  </div>
</body>
</html>
<!-- menuphp -->
<?php
class Menu {
  private $name;
  private $price;
  private $image;
  private $orderCount = 0;
  
  public function __construct($name, $price, $image) {
    $this->name = $name;
    $this->price = $price;
    $this->image = $image;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
  
  public function getName() {
    return $this->name;
  }
  
  public function getImage() {
    return $this->image;
  }
  
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  
  public function getTaxIncludedPrice() {
    return floor($this->price * 1.08);
  }
  
  // getTotalPriceメソッドを定義してください
  
  
}
?>
<!-- data.php -->
<?php
// require_once('menu.php');

$juice = new Menu('JUICE', 600, '');
$coffee = new Menu('COFFEE', 500, '');
$curry = new Menu('CURRY', 900, '');
$pasta = new Menu('PASTA', 1200, '');

$menus = array($juice, $coffee, $curry, $pasta);

?>
<!-- confirm.php -->
<?php 
// require_once('data.php') 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="order-wrapper">
    <h2>注文内容確認</h2>
    <?php foreach ($menus as $menu): ?>
      <?php 
        $orderCount = $_POST[$menu->getName()];
        // $menuに対して、$orderCountを引数としてsetOrderCountメソッドを呼び出してください
        
        
      ?>
      <p class="order-amount">
        <?php echo $menu->getName() ?>
        x
        <?php echo $orderCount ?>
        個
      </p>
      <!-- $menuに対してgetTotalPriceメソッドを呼び出して、金額を表示してください -->
      <p class="order-price"><?php ?>円</p>
    <?php endforeach ?>
  </div>
</body>
</html>