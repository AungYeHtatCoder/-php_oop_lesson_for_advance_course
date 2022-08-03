<?php 
namespace Ashin\ch03\batch07;
include("../../../vendor/autoload.php");
use Ashin\ch03\batch04\ShopProduct;
class ShopProductWriter
{
    public function write($shopProduct)
    {
        $str = $shopProduct->title . ":" . $shopProduct->getProducer() . "(" . $shopProduct->price . ")\n";
        print $str;
    }
}