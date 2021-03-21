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
    // $this->orderCount = 10;
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
  
  // 注文数
  public function getOrderCount() {
    return $this->orderCount;
  }
  
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }
  // 合計金額
  // 税込価格×注文数
  public function getTotalPrice() {
    return $this->getTaxPrice() * $this->orderCount;
  }
  
  
}
// コーヒー
$coffee = new Menu();
$coffee->setName('BitterCOFFEE');
$coffee->setPrice(500);
$coffee->setImage('assets/img/coffee1.jpeg');
// 注文数

$coffee2 = new Menu();
$coffee2->setName('MilkCOFFEE');
$coffee2->setPrice(550);
$coffee2->setImage('assets/img/coffee2.jpeg');

$coffee3 = new Menu();
$coffee3->setName('SweetCOFFEE');
$coffee3->setPrice(600);
$coffee3->setImage('assets/img/coffee3.jpeg');
// ジュース
$juice = new Menu();
$juice->setName('OrangeJUICE');
$juice->setPrice(300);
$juice->setImage('assets/img/juice1.jpeg');

$juice2 = new Menu();
$juice2->setName('AcerolaJUICE');
$juice2->setPrice(350);
$juice2->setImage('assets/img/juice2.jpeg');

$juice3 = new Menu();
$juice3->setName('PineappleJUICE');
$juice3->setPrice(400);
$juice3->setImage('assets/img/juice3.jpeg');

// カレー
$curry = new Menu();
$curry->setName('HealthyCURRY');
$curry->setPrice(700);
$curry->setImage('assets/img/curry1.jpeg');

$curry2 = new Menu();
$curry2->setName('NaanCURRY');
$curry2->setPrice(750);
$curry2->setImage('assets/img/curry2.jpeg');

$curry3 = new Menu();
$curry3->setName('ChickenNaanCURRY');
$curry3->setPrice(800);
$curry3->setImage('assets/img/curry3.jpeg');

// パスタ
$pasta = new Menu();
$pasta->setName('MixPotatePizza');
$pasta->setPrice(1000);
$pasta->setImage('assets/img/pizza1.jpeg');

$pasta2 = new Menu();
$pasta2->setName('SalamiPizza');
$pasta2->setPrice(1100);
$pasta2->setImage('assets/img/pizza2.jpeg');

$pasta3 = new Menu();
$pasta3->setName('BaconPizza');
$pasta3->setPrice(1200);
$pasta3->setImage('assets/img/pizza3.jpeg');

// 配列 それぞれの商品
// 商品の順番を変えるときは配列の順番を変える
$menus = array($coffee, $coffee2, $coffee3, $juice, $juice2, $juice3, $curry, $curry2, $curry3, $pasta, $pasta2, $pasta3);
?>