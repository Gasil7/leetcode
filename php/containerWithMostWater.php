<?php
$height  = [1,8,6,2,5,4,8,3,7];
$solution = new Solution();
$res = $solution->maxArea1($height);

class Solution {
    //超时
    function maxArea1($height) {
        $max = 0;
        for ($i = 0; $i < sizeof($height); $i++){
            for ($j = $i+1; $j < sizeof($height); $j++){
                $area = min($height[$i],$height[$j]) * abs($i-$j);
                if($area >= $max){
                    $max = $area;
                }
            }
        }
        return $max;
    }
}