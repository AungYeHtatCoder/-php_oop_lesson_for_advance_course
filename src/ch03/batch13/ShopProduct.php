<?php 
declare(strict_types=1);

namespace Ashin\ch03\batch13;

/////// ShopProduct ///////
// listing 03.61

class ShopProduct 
{
 public $title;
 public $producerMainName;
 public $producerFirstName;
 public $price;


 public function __construct(
  $title,
  $firstName,
  $mainName,
  $price
 )
 {
  $this->title = $title;
  $this->producerFirstName = $firstName;
  $this->producerMainName = $mainName;
  $this->price = $price;
 }

 public function getProducer() : string
 {
  return $this->producerFirstName . " " . $this->producerMainName;
 }

 public function getSummaryLine() : string
 {
  $base = "{$this->title} ({$this->producerMainName}";
  $base .= " {$this->producerFirstName})";
  return $base;
 }
}

/* /listing 03.61 */