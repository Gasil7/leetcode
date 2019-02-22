<?php

class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        $mapping = [
            '2' => ['a','b','c'],
            '3' => ['d','e','f'],
            '4' => ['g','h','i'],
            '5' => ['j','k','l'],
            '6' => ['m','n','o'],
            '7' => ['p','q','r','s'],
            '8' => ['t','u','v'],
            '9' => ['w','x','y','z']
        ];

        if($digits == ''){
            return [];
        }elseif(strlen($digits) == 1){
            return $mapping[$digits];
        }

        $temp = [];
        $res = $mapping[$digits[0]];
        for ($i = 0; $i<strlen($digits); $i++){
            array_push($temp, $mapping[$digits[$i]]);
        }
        for ($k = 0; $k<strlen($digits)-1; $k++){
            $res = $this->find($k, $temp, $res);
        }
        return $res;
    }
    
    function find($k, $temp, $res){
        $tempRes = [];
        
        for ($i = 0; $i < sizeof($res, 0); $i++){
            for ($j = 0; $j<sizeof($temp[$k+1], 0); $j++){
                $tempRes[] = $res[$i].$temp[$k+1][$j];
            }
        }
        return $tempRes;
    }
}