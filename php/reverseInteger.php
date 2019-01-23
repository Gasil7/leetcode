<?php
$x = 92233720368547758071;

$solution = new solution();
$res = $solution->reverse($x);

var_dump($res);

class Solution {
    function reverse($x) {
        $sign = 1;
        if($x<0){
            $sign = 0;
            $x = abs($x);
        }

        $revnum = strrev($x);

        if($sign == 0){
            $revnum = '-'.$revnum;
        }

        if( -2147483648<= $revnum && $revnum<= 2147483647){
            return (int)$revnum;
        }else{
            return 0;
        }   
    }
}