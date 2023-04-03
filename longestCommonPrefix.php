<?php 
<<<<<<< HEAD

=======
>>>>>>> master
class Solution {

  /**
   * @param String[] $strs
   * @return String
   */
  function longestCommonPrefix($strs) {
    $result = $strs[0];
    for ($i = 1; $i < count($strs); $i++) {
<<<<<<< HEAD
      $str = $strs[i];
      while (substr($str, 0, strlen($result)) != $result && strlen($result) > 0) {
        $result = substr(0, strlen($result) - 1);
=======
      $str = $strs[$i];
      while (substr($str, 0, strlen($result)) != $result && strlen($result) > 0) {
        $result = substr($result, 0, strlen($result) - 1);
>>>>>>> master
      }
    }
    return $result;
  }
}

<<<<<<< HEAD
// ["flower","flow","flight"]
=======
$solution = new Solution;

echo $solution->longestCommonPrefix(['Ju', 'Ju', 'Jumana',]) . "\n";
>>>>>>> master
