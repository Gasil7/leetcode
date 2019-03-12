<?php   
    class Solution {

        /**
         * @param Integer[] $nums
         * @param Integer $val
         * @return Integer
         */
        function removeElement(&$nums, $val) {
            $length = sizeof($nums);
            for ($i=0; $i < $length; $i++) { 
                if($nums[$i] == $val){
                    unset($nums[$i]);
                }
            }
            return sizeof($nums);
        }

        function removeElement2(&$nums, $val) {
            foreach($nums as $k => $v){
                if($v == $val)
                    unset($nums[$k]);
            }
            return sizeof($nums);
        }
    }

$solution = new Solution();
$nums = [0,0,1,1,1,2,2,3,3,4];
$val = 4;

$res = $solution->removeElement($nums, $val);
var_dump($res);