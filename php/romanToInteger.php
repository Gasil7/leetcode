<?php
$s = 'XXX';

$solution = new Solution();
$res = $solution->romanToInt1($s);

class Solution {
    function romanToInt1($s) {
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

    function romanToInt2($s) {
        $value = [
            'I'=>1,'V'=>5,'X'=>10,'L'=>50,'C'=>100,'D'=>500,'M'=>1000
        ];

        $sum = 0;
        $length = strlen($s);

        for ($i = 0; $i<$length; $i++){
            $sum += $value[$s[$i]];

            if($i != 0){
                if(($s[$i] == 'V' || $s[$i] == 'X') && $s[$i-1] == 'I'){
                    $less += 1;
                }elseif(($s[$i] == 'L' || $s[$i] == 'C') && $s[$i-1] == 'X'){
                    $less += 10;
                }elseif(($s[$i] == 'D' || $s[$i] == 'M') && $s[$i-1] == 'C'){
                    $less += 100;
                }
            }
        }
        $sum = $sum-$less*2;
        
        return $sum;
    }
}