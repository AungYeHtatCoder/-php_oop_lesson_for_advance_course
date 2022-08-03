<?php 
declare(strict_types=1);

namespace Ashin\ch03\batch13;

class Storage 
{
 public function add(string $key, string|bool $value)
 {
  // do something with $key and $value
 /* /listing 03.43 */
        return [$key, $value];
/* listing 03.43 */
    }
}
/* /listing 03.43 */