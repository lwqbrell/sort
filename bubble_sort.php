<?php

// 冒泡排序
function bublle_sort($arr){
    if (!is_array($arr)){
        die('please input array');
    }
    if (count($arr)<=1){
        return $arr;
    }
    for ($i=0;$i<count($arr)-1;$i++){
        for ($j=count($arr)-2;$j>$i;$j--){
            if ($arr[$j]>$arr[$j+1]){
                $tmp=$arr[$j];
                $arr[$j]=$arr[$j+1];
                $arr[$j+1]=$tmp;
            }
        }
    }
    return $arr;
}

$arr=[1,43,54,62,21,66,32,78,36,76,39];
var_dump(bublle_sort($arr));