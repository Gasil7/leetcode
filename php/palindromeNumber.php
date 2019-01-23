<?php
$x = 1231321313;

$solution = new Solution();
$res = $solution->isPalindrome($x);
var_dump($res);

class Solution {
    function isPalindrome($x) {
        $numStr = (string)$x;
        return strrev($numStr)===$numStr ? true : false;
    }
}