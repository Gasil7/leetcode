<?php
class Solution {
    public static $arr = [];

    function generateParenthesis($n){
        $this->abc($n, $left=0, $right=0, $str='');
        return self::$arr;
    }

    function abc($n, $left, $right, $str){
        if(strlen($str) == $n*2){
            self::$arr[] = $str;
            return;
        }

        if($left < $n){
            $this->abc($n, $left+1, $right, $str.'(');
        }

        if($left > $right){
            $this->abc($n, $left, $right+1, $str.')');
        }
    }
}


$solution = new Solution();
$res = $solution->generateParenthesis(1);
var_dump($res);