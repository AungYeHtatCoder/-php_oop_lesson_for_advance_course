<?php
namespace Ashin\ch03\batch07;
include("../../../vendor/autoload.php");
use Ashin\ch03\batch04\ShopProduct;
use Ashin\ch03\batch07\ShopProductWriter;

class Runner {
 public static function run1(){
  $product1 = new ShopProduct(
   "My Antonia",
   "Willa",
   "Cather",
   5.99
  );
  $writer = new ShopProductWriter();
  $writer->write($product1);
 }
}

Runner::run1();