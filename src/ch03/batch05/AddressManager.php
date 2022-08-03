<?php 
namespace Ashin\ch03\batch05;

class AddressManager {
 private $addresses = ["209.131.36.159", "216.58.213.174"];

 public function outputAddress ($resolve) {
  foreach ($this->addresses as $address) {
   print $address;
   if ($resolve) {
    print " (" . gethostbyaddr($address) . ")";
   }
   print "\n";
  }
 }
}