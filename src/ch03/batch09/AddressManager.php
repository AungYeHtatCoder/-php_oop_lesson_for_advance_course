<?php 
namespace Ashin\ch03\batch09;

class AddressManager {
 private $addresses = array( "209.131.36.159", "216.58.213.174" );
/* listing 03.36 */
 public function outputAddresses(bool $resolve)
 {
  foreach ($this->addresses as $address)
  {
   print $address;
   if ($resolve)
   {
    print " (" . gethostbyaddr($address) . ")";
   }
   print "\n";
  }
 }
}