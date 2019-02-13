<?php
$solution = new Solution();
$strs = ["dog","racecar","car"];
$res = $solution->longestCommonPrefix($strs);

class Solution {
    function longestCommonPrefix($strs) {
        $length = strlen($strs[0]);
        for ($i = 0; $i<$length; $i++){
            $pre = $strs[0][$i];
            for ($j = 1; $j<sizeof($strs); $j++){
                if($pre != $strs[$j][$i]){
                    break 2;
                }
            }
        }
        $prefix = substr($strs[0],0,$i);
        return $prefix;
    }
}