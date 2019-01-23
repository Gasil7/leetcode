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

    function manacher($str){
        //转换后str最大回文的中心坐标
        $maxIndex = 0;
        //转换后str最大回文的包括中心点的半边长度
        $maxLength = 0;
        //通过在每个字符的两边都插入一个特殊的符号，将所有的回文子串都转换成奇数长度，首尾防止越界
        $newStr = "^#" . implode("#", str_split($str)) . "#%";

        for ($i = 2; $i < strlen($newStr)-1; $i++){
            $key = 1;
            while($newStr[$i-$key] == $newStr[$i+$key]){
                $key++;
            }
            if($key > $maxLength){
                $maxIndex = $i;
                $maxLength = $key;
            }
        }
        $res = str_replace('#','',substr($newStr, $maxIndex-$maxLength+1, 2*$maxLength-1));
        return $res;
    }
} 