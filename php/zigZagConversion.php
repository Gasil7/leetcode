<?php

$s = 'PAYPALISHIRING';
$numRows = 3;

$solution = new solution();
$res = $solution->convert($s, $numRows);
var_dump($res);

class Solution {
    function convert($s, $numRows) {
        if($numRows == 1){
            return $s;
        }

        $every = 2*$numRows-2;
        $split = str_split($s, $every);
        $sstr = '';

        for ($i = 0; $i<= $numRows-1; $i++){
            foreach ($split as $v){
                $sstr .= (isset($v[$i])?$v[$i]:'') . (isset($v[$every-$i])? ($every == 2*$i ? '': $v[$every-$i]) :'');
            }
        }
        
        return $sstr;
    }
}