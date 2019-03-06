<?php

class Solution {
    function isValid($s) {
        $left = ['(','[','{'];
        if($s == ''){
            return true;
        }

        $arr= str_split($s);
        if(!in_array($arr[0],$left)){
            return false;
        }

        while($arr !== false){
            $arr = $this->reduce($arr);
            if(empty($arr)){
                return true;
            }
        }
    }

    function reduce($arr){
        $left = ['(','[','{'];
        $right = [')',']','}'];
        for($i = 0; $i< sizeof($arr); $i++){
            if(in_array($arr[$i], $right)){
                if(array_search($arr[$i],$right) == array_search($arr[$i-1],$left)){
                    unset($arr[$i]);
                    unset($arr[$i-1]);
                    $arr = array_values($arr);
                    return $arr;
                }
                return false;
            }
        }
        return false;
    }
}

$s = "([)]{}         ";
$solution = new Solution();
$res = $solution->isValid($s);
var_dump($res);
    