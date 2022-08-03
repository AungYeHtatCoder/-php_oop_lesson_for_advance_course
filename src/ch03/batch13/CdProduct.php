<?php 
declare(strict_types=1);

namespace Ashin\ch03\batch13;

use Ashin\ch03\batch13\ShopProduct;

class CdProduct extends ShopProduct

{
 public $playLength;

 public function __construct(
  string $title,
  string $firstName,
  string $mainName,
  float $price,
  int $playLength
 )
 {
  parent::__construct(
   $title,
   $firstName,
   $mainName,
   $price
  );
  $this->playLength = $playLength;
 }

 public function getSummaryLine(): string
 {
  $base = "{$this->title} ({$this->producerMainName}";
  $base .= " {$this->producerFirstName})";
  $base .= ": playing time - {$this->playLength}";
  return $base;
 }
}

/* /listing 03.63 */