<?php 
declare(strict_types = 1);
namespace Ashin\ch03\batch10;

class Storage {
 public function add(string $key, $value)
 {
  return [$key => $value];
 }
}