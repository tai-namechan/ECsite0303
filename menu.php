<?php


class Menu {
  // プロパティ
  private $name;
  private $price;
  private $image;
  private $orderCount = 0;
  // 初期値
  public function __construct() {
    $this->name = '食べ物';
    $this->price = '値段';
    $this->image = '写真';
  }
  
  // メソッド
  public function getName() {
    return $this->name;
  }
  public function setName($namae) {
    $this->name = $namae;
  }

  public function getPrice() {
    return $this->price;
  }
  public function setPrice($nedann) {
    $this->price = $nedann;
  }

  public function getImage() {
    return $this->image;
  }
  public function setImage($gazou) {
    $this->image = $gazou;
  }
  
  // 税込価格
  public function getTaxPrice() {
    return floor($this->price * 1.08);
  }
  
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  // getTotalPriceメソッドを定義してください
  
  
}
// コーヒー
$coffee = new Menu();
$coffee->setName('COFFEE');
$coffee->setPrice(500);
$coffee->setImage('assets/img/coffee1.jpeg');

$coffee2 = new Menu();
$coffee2->setName('COFFEE');
$coffee2->setPrice(550);
$coffee2->setImage('assets/img/coffee2.jpeg');

$coffee3 = new Menu();
$coffee3->setName('COFFEE');
$coffee3->setPrice(600);
$coffee3->setImage('assets/img/coffee3.jpeg');
// ジュース
$juice = new Menu();
$juice->setName('JUICE');
$juice->setPrice(300);
$juice->setImage('assets/img/juice1.jpeg');

$juice2 = new Menu();
$juice2->setName('JUICE');
$juice2->setPrice(350);
$juice2->setImage('assets/img/juice2.jpeg');

$juice3 = new Menu();
$juice3->setName('JUICE');
$juice3->setPrice(400);
$juice3->setImage('assets/img/juice3.jpeg');

// カレー
$curry = new Menu();
$curry->setName('CURRY');
$curry->setPrice(700);
$curry->setImage('assets/img/curry1.jpeg');

$curry2 = new Menu();
$curry2->setName('CURRY');
$curry2->setPrice(750);
$curry2->setImage('assets/img/curry2.jpeg');

$curry3 = new Menu();
$curry3->setName('CURRY');
$curry3->setPrice(800);
$curry3->setImage('assets/img/curry3.jpeg');

// パスタ
$pasta = new Menu();
$pasta->setName('PASTA');
$pasta->setPrice(1000);
$pasta->setImage('assets/img/pizza1.jpeg');

$pasta2 = new Menu();
$pasta2->setName('PASTA');
$pasta2->setPrice(1100);
$pasta2->setImage('assets/img/pizza2.jpeg');

$pasta3 = new Menu();
$pasta3->setName('PASTA');
$pasta3->setPrice(1200);
$pasta3->setImage('assets/img/pizza3.jpeg');

// 配列 それぞれの商品
// 商品の順番を変えるときは配列の順番を変える
$menus = array($coffee, $coffee2, $coffee3, $juice, $juice2, $juice3, $curry, $curry2, $curry3, $pasta, $pasta2, $pasta3);
?>