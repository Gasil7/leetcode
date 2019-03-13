<?php
class Solution{
    function divide($dividend, $divisor){
        $diff = $dividend-$divisor;
        $quotient = 1;

        while($diff > $divisor){
            $diff = $diff-$divisor; 
            $quotient++;
        }
        return $quotient;
    }
}

$solution = new Solution();
$res = $solution->divide(20, 3);
