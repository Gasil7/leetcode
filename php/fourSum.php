<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[][]
     */
    function fourSum($nums, $target) {
        $res= [];

        sort($nums);
        var_dump($nums);exit;
        $size = sizeof($nums);
        for($i = 0; $i< $size-3; $i++){
            for($j = $i+1; $j< $size-4; $j++){
                $min = $j+1;
                $max = $size-1;

                while($min < $max){
                    $sum = $nums[$i]+$nums[$j]+$nums[$min]+$nums[$max];

                    if($sum < $target){
                        $min++;
                    }elseif($sum > $target){
                        $max--;
                    }else{
                        $res[] = [$nums[$i], $nums[$j], $nums[$min], $nums[$max]];
                        $min++;$max--;
                    }
                    
                }

            }
        }
        return $res;


    }
}

$nums = [1, 0, -1, 0, -2, 2];
$target = 0;

$solution = new Solution();
$res = $solution->fourSum($nums, $target);
var_dump($res);



