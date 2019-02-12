<?php
$s = 'XXX';

$solution = new Solution();
$res = $solution->romanToInt($s);

class Solution {
    function romanToInt($s) {
        $value = [
            'I'=>1,'V'=>5,'X'=>10,'L'=>50,'C'=>100,'D'=>500,'M'=>1000
        ];

        $sum = 0;
        $length = strlen($s);

        for ($i = 0; $i+1<$length; $i++){
            if($value[$s[$i]] >= $value[$s[$i+1]]){
                $sum+= $value[$s[$i]];
            }else{
                $sum-= $value[$s[$i]];
            }
        }
        $sum += $value[$s[$length-1]];
        return $sum;
    }
}