<?php
$num = rand(1,3999);
$solution = new Solution();
$res = $solution->intToRoman($num);
var_dump($res);

class Solution {
    function intToRoman($num) {
        $roma = array(
            ['','M','MM','MMM'],
            ['','C','CC','CCC','CD','D','DC','DCC','DCCC','CM'],
            ['','X','XX','XXX','XL','L','LX','LXX','LXXX','XC'],
            ['','I','II','III','IV','V','VI','VII','VIII','IX'],
        );
        $divisor = [1000, 100, 10, 1];
        $str = '';

        foreach ($divisor as $k => $v){
            $str .= $roma[$k][floor($num/$v)];
            $num = $num%$v;
        }

        return $str;
    }
}