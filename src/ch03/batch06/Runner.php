<?php 
namespace Ashin\ch03\batch06;
include("../../../vendor/autoload.php");

use Ashin\ch03\batch06\AddressManager;

class Runner {
 public static function run1()
 {
  $settings = simplexml_load_file(__DIR__ . "/resolve.xml");
  $manager = new AddressManager();
  $manager->outputAddresses((string)
  $settings->resolvedomains);
 }
}

Runner::run1();