<?php 

namespace Ashin\ch03\batch13;
include "../../../vendor/autoload.php";

use Ashin\ch03\batch13\ShopProduct;
use Ashin\ch03\batch13\CdProduct;
use Ashin\ch03\batch13\BookProduct;
use Ashin\ch03\batch09\AddressManager;

class Runner

{
 public static function run1()
 {
  $product2 = new CdProduct(
   "Exile on Coldharbour Lane",
   "The",
   "Alabama 3",
   10.99,
   60
  );
  print "artist: {$product2->getProducer()}\n";
 }
}

Runner::run1();