<?php
$str = 'a2ad1231dsadassda';
$solution = new Solution();
$res = $solution->myAtoi($str);
var_dump($res);

class Solution {
    function myAtoi($str) {
        $newStr = trim($str);
        $num = '';

        if(is_numeric($newStr[0])){
            $num = $newStr[0];
        }elseif($newStr[0] == '-' && is_numeric($newStr[1])){
            $num = '-';
        }elseif($newStr[0] == '+' && is_numeric($newStr[1])){
            $num = '';
        }else{
            return 0;
        }

        for($i = 1; $i < strlen($newStr); $i++){
            if(is_numeric($newStr[$i])){
                $num .= $newStr[$i];
            }else{
                break;
            }
        }

        //return int($num);

        $num = (int)$num;
        if($num >= 2147483647){
            $num = 2147483647;
        }
        if($num <= -2147483648){
            $num = -2147483648;
        }
        return $num;

    }
}