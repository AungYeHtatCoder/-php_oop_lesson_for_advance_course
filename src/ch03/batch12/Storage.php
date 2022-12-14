<?php 
declare(strict_types=1);
namespace Ashin\ch03\batch12;


class Storage 
{
 public function add(string $key, $value)
 {
  if (! is_bool($value) && ! is_string($value)) {
   error_log("Warning: value must be a string or a boolean - given") . gettype($value);
   return false;
  }
  // do something with $key and $value
/* /listing 03.42 */
  return [$key, $value];
 }
}