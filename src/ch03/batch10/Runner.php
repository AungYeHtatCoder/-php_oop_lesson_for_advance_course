<?php
declare(strict_types = 1);
namespace Ashin\ch03\batch10;
include("../../../vendor/autoload.php");
use Ashin\ch03\batch09\AddressManager;
use Ashin\ch03\batch09\ShopProduct;

class Runner
{
 public static function run1()
 {
  $manager = new AddressManager();
  $manager->outputAddresses("false");
 }
// listing 03.51 
 public static function run2()
 {
  $product1 = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);
  $product2 = new ShopProduct("Exiles on Coldharbour Lane", "John", "Steinbeck", 6.99);
  print "Author: " . $product1->getProducer() . "<hr>";
  print "Author: " . $product2->getProducer() . "\n";
 }
}
/* listing 03.38 
for run1 method 
Because I declare strict typing, this call causes a TypeError to be thrown:
TypeError: popp\ch03\batch09\AddressManager::outputAddresses(): Argument #1
($resolve) must be of type bool, string given, called in...
*/
//Runner::run1();

Runner::run2();