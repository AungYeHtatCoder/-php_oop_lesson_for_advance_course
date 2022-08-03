<?php 
namespace Ashin\ch03\batch09;

class ShopProduct {
 public $title;
 public $producerMainName;
 public $producerFirstName;
 public $price = 0;

 public function __construct(
  $title,
  $firstName,
  $mainName,
  $price
 ) {
  $this->title             = $title;
  $this->producerFirstName = $firstName;
  $this->producerMainName  = $mainName;
  $this->price             = $price;
 }

 public function getProducer() {
  return "{$this->producerFirstName} "
   . "{$this->producerMainName}";
 }
 public function getPrice() {
  return $this->price;
 }
}