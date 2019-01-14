<?php
$str = 'abcabcbbacsdsdads';

$longerStr = new longestStr();
$size = $longerStr->longestStr1($str);
var_dump($size['length']);

class longestStr {
    public function longestStr1($str){
        $longer = '';
        $newStr = '';
        $length = 0;
        
        for($i = 0; $i < strlen($str); $i++){
            $indexStr = $str[$i];
            $index = strpos($newStr, $indexStr);
            if($index === false){
                $newStr = $newStr . $indexStr;
                if($length < strlen($newStr)){
                    $length = strlen($newStr);
                    $longer = $newStr;
                }
            }else{
                $newStr = substr($newStr, $index+1).$indexStr;
            }
        }
        return ['length'=>$length,'str'=>$longer];
    }
}
