<?php 
namespace Ashin\ch03\batch09;
include("../../../vendor/autoload.php");
use Ashin\ch03\batch09\ShopProduct;
use Ashin\ch03\batch09\AddressManager;

class Runner 
{
 public static function run1()
 {
  $product = new ShopProduct("title", "first", "main", []);
  //print $product->getProducer();
 }

 public static function run2()
 {
  $product = new ShopProduct("title", "first", "main", "4.22");
  //print $product->getPrice(10);
  print $product->getPrice();
 
 }
 public static function run3()
 {
  $manager = new AddressManager();
  $manager->outputAddresses(false);
 }
}

Runner::run1();
Runner::run2();
echo "<hr>";
Runner::run3();