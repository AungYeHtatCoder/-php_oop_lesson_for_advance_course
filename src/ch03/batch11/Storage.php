<?php 
namespace Ashin\ch03\batch11;
/* listing 03.41 */

class Storage 
{
 public function add(string $key, mixed $value)
 {
  return [$key, $value];
 }
}