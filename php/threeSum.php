<?php
class Solution {
    //超时了T-T
    function threeSum($nums) {
        $arr = [];
        foreach ($nums as $k => $v){
            for($i = 0; $i<sizeof($nums); $i++){
                if($i == $k)continue;
                for ($j = $i+1; $j<sizeof($nums); $j++){
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
}