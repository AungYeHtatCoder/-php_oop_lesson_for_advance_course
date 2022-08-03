<?php 
declare(strict_types = 1);

namespace Ashin\ch03\batch10;
class ConfReader
{
    public function getValues(array $default = [])
    {
     $values = [];
     // do something to get values 
     $values = ["name" => "mary"];

     $values = array_merge($default, $values);
     return $values;
    }
}