<?php 
namespace Ashin\ch03\batch08;
include("../../../vendor/autoload.php");
use Ashin\ch03\batch04\ShopProduct;

class ShopProductWriter
{
    public function write(ShopProduct $shopProduct)
    {
        $str  = "{$shopProduct->title}: " .
                $shopProduct->getProducer() .
                " ({$shopProduct->price})\n";
        print $str;
    }
}