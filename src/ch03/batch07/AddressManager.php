<?php 
namespace Ashin\ch03\batch07;
class AddressManager
{
 private $addresses = array ("209.131.36.159", "216.58.213.174");   
 public function outputAddresses($resolve)
    {
         if (is_string($resolve)) {
            $resolve = (preg_match("/^(false|no|off)$/i", $resolve) ) ? false : true;
        }

        foreach ($this->addresses as $address) {
            print $address;
            if ($resolve) {
                print " (" . gethostbyaddr($address) . ")";
            }
            print "\n";
        }
    }
}