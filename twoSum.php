<?php

$ts = new TwoSum();
var_dump($ts->twoSum2());

class TwoSum
{
    private $target = 19;
    private $nums = [3,4,5,6,7,8,9,10];

    public function twoSum1(){
        $return = array();
        foreach($this->nums as $k1 => $v1){
            foreach($this->nums as $k2 =>$v2){
                if($v1 + $v2 == $this->target){
                    if($v1 != $v2){
                        $return = [$k1, $k2];
                        break 2;
                    }
                }
            }
        }
        return $return;
    }

    public function twoSum2(){
        $return = array();
        foreach($this->nums as $k => $v){
            $t = array_search($this->target - $v, $this->nums);
            if($t && ($this->nums[$t] != $v)){
                $return = array($k, $t);
                break;
            }
        }
        return $return;
    }

    public function twoSum3(){
        $nums = array_flip($this->nums);
        foreach($this->nums as $k => $v){
            $t = $nums[$this->target - $v];
            if(!is_null($nums[$t]) && $nums[$t] != $v){
                $return = [$k, $t];
                break;
            }
        }
        return $return;
    }
}