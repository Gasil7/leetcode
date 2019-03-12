<?php
    class Solution {

        /**
         * @param String $haystack
         * @param String $needle
         * @return Integer
         */
        function strStr($haystack, $needle) {
            if($needle == ''){
                return 0;
            }
    
            $needleLength = strlen($needle);
            for($i = 0; $i< strlen($haystack)-$needleLength+1; $i++){
                if($haystack[$i] == $needle[0]){
                    for($j = 0; $j< strlen($needle); $j++){
                        if($haystack[$i+$j] != $needle[$j]){
                            break;
                        }
                        if($j+1 == $needleLength){
                            return $i;
                        }
                    }
                }
            }
            return -1;
        }
    }

