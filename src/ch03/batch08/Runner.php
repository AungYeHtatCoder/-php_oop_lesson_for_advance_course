<?php 
namespace Ashin\ch03\batch08;
include("../../../vendor/autoload.php");
use Ashin\ch03\batch04\ShopProduct;
use Ashin\ch03\batch08\ShopProductWriter;
use Ashin\ch03\batch08\Wrong;

class Runner {
 public static function run1(){
  $writer = new ShopProductWriter();
  $writer->write(new Wrong());
 }
}

Runner::run1();

/*
(page - 62)
Because the write() method contains a class type declaration, passing it a Wrong
object causes a fatal error.
TypeError: popp\ch03\batch08\ShopProductWriter::write(): Argument #1
($shopProduct) must be of type
popp\ch03\batch04\ShopProduct, popp\ch03\batch08\Wrong given, called in
/var/popp/src/ch03/batch08/Runner.php on ...
*/