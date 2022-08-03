<?php 
declare(strict_types=1);

namespace Ashin\ch03\batch11;
include "../../../vendor/autoload.php";
use Ashin\ch03\batch11\Point;

/* /listing 03.73 */
class Runner 
{
 public static function run1()
 {
  $point = new Point();
  //$point->x ="abc";
  $point->x = 2;
  //echo $point;
  echo $point->x;
 }
}
print_r (Runner::run1());

/*
Fatal error: Uncaught TypeError: Cannot assign string to property Ashin\ch03\batch11\Point::$x of type int in C:\xampp\htdocs\php_oop\src\ch03\batch11\Runner.php:12 Stack trace: #0 C:\xampp\htdocs\php_oop\src\ch03\batch11\Runner.php(16): Ashin\ch03\batch11\Runner::run1() #1 {main} thrown in C:\xampp\htdocs\php_oop\src\ch03\batch11\Runner.php on line 12
*/