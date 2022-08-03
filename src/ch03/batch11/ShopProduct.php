<?php 
namespace Ashin\ch03\batch11;
/* listing 03.52 */

class ShopProduct
{
 public $numPages;
 public $playLength;
 public $title;
 public $producerMainName;
 public $producerFirstName;
 public $price;

 public $type = "Book";


 public function __construct(
  string $title,
  string $firstName,
  string $mainName,
  float $price,
  int $numPages = 0,
  int $playLength = 0
 ) {
  $this->title = $title;
  $this->producerFirstName = $firstName;
  $this->producerMainName = $mainName;
  $this->price = $price;
  $this->numPages = $numPages;
  $this->playLength = $playLength;
 }
 public function getNumberOfPages() : int
 {
  return $this->numPages;
 }
 public function getPlayLength() : int
 {
  return $this->playLength;
 }
 public function getProducer() : string
 {
  return "{$this->producerFirstName} "
   . "{$this->producerMainName}";
 }

 public function setType(string $type): void
 {
  $this->type = $type;
 }

 public function getSummaryLine() : string
 {
  $base  = "{$this->title} ( {$this->producerMainName}, ";
  $base .= "{$this->producerFirstName} )";
  if ($this->type == "Book") {
   $base .= ": page count - {$this->numPages}";
  }elseif ($this->type == "CD") {
   $base .= ": playing time - {$this->playLength}";
  }
  return $base;
 }

 /* /listing 03.53 */
 /* /listing 03.52 */
}