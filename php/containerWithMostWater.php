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

    //从两边向中间缩
    //每次保留较长一边，另一边向内一步
    //比较移动前后的面积
    function maxArea2($height){
        $minIndex = 0;
        $maxIndex = sizeof($height)-1;
        $max = min($height[$minIndex],$height[$maxIndex]) * (sizeof($height)-1);

        while($minIndex < $maxIndex){
            if($height[$minIndex] < $height[$maxIndex]){
                $minIndex++;
            }else{
                $maxIndex--;
            }
            $nextArea = min($height[$minIndex],$height[$maxIndex]) * ($maxIndex - $minIndex);
            if($nextArea > $max){
                $max = $nextArea;
            }
        }
        return $max;
    }
}