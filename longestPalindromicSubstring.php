<?php
    
$s  = 'ac';
$rs = 'abacdgfdcaba';
$solution = new Solution();
$res = $solution->longestPalindrome($s);
var_dump($res);

class Solution {
    //这个打败了0.00%用户
    function longestPalindrome($s) {
        $rs = strrev($s);
        $length = strlen($s);
        $same = array();

        $maxLength = 0;
        $maxStr = '';

        if($length == 1){
            return $s;
        }
        if($s == $rs){
            return $s;
        }

        for($i = 0; $i < $length; $i++){
            for($j = 1; $j <= ($length-$i); $j++){
                $substr = substr($s, $i, $j);
                $index = strpos($rs, $substr);
                if($index !== false){
                    if($substr == strrev($substr)){
                        if(strlen($substr) > $maxLength){
                            $maxLength = strlen($substr);
                            $maxStr = $substr;
                        }
                    }
                }
            }
        }
        return $maxStr;

    }
} 