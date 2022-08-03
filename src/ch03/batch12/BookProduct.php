<?php 
declare(strict_types=1);
namespace Ashin\ch03\batch12;

class BookProduct extends ShopProduct
{
 public function getNumberOfPages(): int {
   return $this->numPages;
 }

 public function getSummaryLine(): string
 {
   $base  = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        $base .= ": page count - {$this->numPages}";
        return $base;
 }
}
/* /listing 03.59 */