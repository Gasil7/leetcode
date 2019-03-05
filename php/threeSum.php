<?php
class Solution {
    //超时了T-T
    function threeSum($nums) {
        $arr = [];
        foreach ($nums as $k => $v){
            for($i = 0; $i<sizeof($nums, 0); $i++){
                if($i == $k)continue;
                for ($j = $i+1; $j<sizeof($nums, 0); $j++){
                    if($j == $k)continue;
                    if($nums[$i] + $nums[$j] == -$v){
                        $temarr = [$nums[$i],$nums[$j],$v];
                        sort($temarr);
                        $arr[] = $temarr;
                    }
                }
            }
        }
        return array_unique($arr, SORT_REGULAR);
    }

    //还超。。
    function threeSum2($nums){
        $arr = [];
        sort($nums);
        for ($i = 0; $i<= sizeof($nums, 0) - 2; $i++){
            $min = $i+1;
            $max = sizeof($nums, 0)-1;
            while($min < $max){
                $sum = $nums[$i] + $nums[$min] + $nums[$max];

                if($sum >0){
                    $max --;
                }elseif ($sum <0){
                    $min ++;
                }else{
                    $arr[] = [$nums[$i] , $nums[$min], $nums[$max]];
                    $max --;
                    $min ++;                }
            }
        }
        return array_unique($arr, SORT_REGULAR);
    }
}