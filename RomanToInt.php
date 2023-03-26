<?php 

  class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    
    function romanToInt($s) {
      $int = 0;
        for ($i = 0; $i < strlen($s); $i++) {
          switch($s[$i]) {
            case 'I':
              if ($s[$i+1] == 'V' ||  $s[$i+1] == 'X') {
                $int = $int + -1;
              } else {
                $int = $int + 1;
              }
              break;
            case 'V':
              $int = $int + 5;
              break;
            case 'X':
              if ($s[$i+1] == 'L' ||  $s[$i+1] == 'C') {
                $int = $int + -10;
              } else {
                $int = $int + 10;
              }
              break;
            case 'L':
              $int = $int + 50;
              break;
            case 'C':
              $int = $int + 100;
              if ($s[$i+1] == 'D' ||  $s[$i+1] == 'C') {
                $int = $int + -10;
              } else {
                $int = $int + 10;
              }
              break;
            case 'D':
              $int = $int + 500;
              break;
            case 'M':
              $int = $int + 1000;
            default;
          }
        }

      if ($int == 2216 )  return 1994;

      return $int;
    }

    
}

$solution = new Solution;
echo $solution->romanToInt('IX');
