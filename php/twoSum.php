<?php
$target = 8;
$nums = [4,4];
$ts = new TwoSum();
var_dump($ts->twoSum3($target, $nums));

class TwoSum{
    public function twoSum1($target, $nums){
        $return = array();
        foreach($nums as $k1 => $v1){
            foreach($nums as $k2 =>$v2){
                if($v1 + $v2 == $target){
                    if($k1 != $k2){
                        $return = [$k1, $k2];
                        break 2;
                    }
                }
            }
        }
        return $return;
    }

    public function twoSum2($target, $nums){
        $return = array();
        foreach($nums as $k => $v){
            $newNums = $nums;
            unset($newNums[$k]);
            $t = array_search($target - $v, $newNums);
            if($t && ($t != $k)){
                $return = array($k, $t);
                break;
            }
        }
        return $return;
    }
}