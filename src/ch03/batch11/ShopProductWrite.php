<?php 
namespace Ashin\ch03\batch11;
/* listing 03.56 */

class ShopProductWritr 
{
 public function write($shopProduct): void
 {
  if (!($shopProduct instanceof CdProduct) && !($shopProduct instanceof BookProduct) ) {
   die("Invalid product type");
  }
  $str = "{$shopProduct->title}: " . $shopProduct->getProducer() . " ({$shopProduct->price})";
  print $str;
  }
 }