<?php


$str = 'abcdefgasasasasasasasadsdsasdass';

$newStr = '';

for($i = 0; $i <= strlen($str); $i++){


    $domain = strstr($newStr, $str[$i]);
    if($domain){
        $newStr = $domain;
        var_dump($domain);
        exit;
    }
}