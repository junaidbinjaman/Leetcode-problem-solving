<?php
class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */

    function isValid($s)
    {

        $stack    = [];
        $brackets = [
            ')' => '(',
            '}' => '{',
            ']' => '['
        ];

        for ($i = 0; $i < strlen($s); $i++) {
            $c = $s[$i];

            if (array_key_exists($c, $brackets)) {
                if (empty($stack) || array_pop($stack) !== $brackets[$c]) {
                    return false;
                }
            } else {
                array_push($stack, $c);
            }
        }
        return empty($stack);
    }
}

$solution = new Solution;

echo $solution->isValid('(){}');