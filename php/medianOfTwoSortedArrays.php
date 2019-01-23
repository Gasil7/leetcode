<?php

$nums1 = [1,2,3];
$nums2 = [2];

$solution = new solution();
$res = $solution->findMedianSortedArrays1($nums1, $nums2);
var_dump($res);

class solution{

    public function findMedianSortedArrays1($num1, $num2){  
        $nums = array_merge($num1, $num2);
        sort($nums);
        $length = sizeof($nums);
        if($length % 2 == 0){
            return ($nums[$length/2] + $nums[$length/2 -1])/2;
        }else{
            return $nums[($length-1)/2];
        }
    }

}