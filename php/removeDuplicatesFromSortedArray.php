<?php
    class Solution {

        /**
         * @param Integer[] $nums
         * @return Integer
         */
        function removeDuplicates(&$nums) {
            $length = sizeof($nums);
            for ($i=1; $i < $length; $i++) { 
                if($nums[$i] == $nums[$i-1]){
                    unset($nums[$i-1]);
                }
            }
            return sizeof($nums);
        }
    }

$solution = new Solution();
$nums = [0,0,1,1,1,2,2,3,3,4];

$res = $solution->removeDuplicates($nums);
var_dump($res);