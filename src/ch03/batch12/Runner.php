<?php 
namespace Ashin\ch03\batch12;

include "../../../vendor/autoload.php";

use Ashin\ch03\batch12\ShopProduct;
use Ashin\ch03\batch12\BookProduct;
use Ashin\ch03\batch12\CdProduct;
use Ashin\ch03\batch09\AddressManager;

class Runner 
{
 public static function run1()
 {
  $product2 = new CdProduct("Exile on Coldharbour Lane", "The", "Alabama 3", 10.99, 60.33);
  print "Artist: {$product2->getProducer()}\n";
  
 }
}

Runner::run1();