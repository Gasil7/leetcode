<?php

class Solution {
    function threeSumClosest($nums, $target) {
        //排序
        sort($nums);
        //定义一个初始和
        $initialSum = $nums[0]+$nums[1]+$nums[2];
        for($i = 0; $i<=sizeof($nums)-2; $i++){
            $left  = $i+1;
            $right = sizeof($nums)-1;
            while ($left < $right){
                $sum = $nums[$i] + $nums[$left] + $nums[$right];
                $difference = abs($target - $sum);
                $initialDifference = abs($target-$initialSum);
                if($difference < $initialDifference){
                    $initialSum = $sum;
                }
                if($sum < $target){
                    $left++;
                }elseif($sum > $target){
                    $right--;
                }else{
                    return $target;
                }
            }
        }
        return $initialSum;
    }
}