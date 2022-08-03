<?php 
namespace Ashin\ch03\batch11;


/* listing 03.55 */
class BookProduct
{
 public $numPages;
 public $title;
 public $producerMainName;
 public $producerFirstName;
 public $price;

 public function __construct(
  $title,
  $firstName,
  $mainName,
  $price,
  $numPages
 ) {
  $this->title = $title;
  $this->producerFirstName = $firstName;
  $this->producerMainName = $mainName;
  $this->price = $price;
  $this->numPages = $numPages;
 }

 public function getNumberOfPages()
 {
  return $this->numPages;
 }
 public function getSummaryLine()
 {
  $base  = "{$this->title} ( {$this->producerMainName}, ";
  $base .= "{$this->producerFirstName} )";
  $base .= ": page count - {$this->numPages}";
  return $base;
 }

 public function getProducer() : string
 {
  return "{$this->producerFirstName} "
   . "{$this->producerMainName}";
 }

}