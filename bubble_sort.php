<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 2019/5/23
 * Time: 10:24
 */
// 冒泡排序
function bublle_sort($arr){
    if (!is_array($arr)){
        die('please input array');
    }
    if (count($arr)<=1){
        return $arr;
    }
    for ($i=0;$i<count($arr);$i++){
        for ($j=count($arr)-1;$j>$i;$j--){
            if ($arr[$j-1]>$arr[$j]){
                $tmp=$arr[$j-1];
                $arr[$j-1]=$arr[$j];
                $arr[$j]=$tmp;
            }
        }
    }
    return $arr;
}

$arr=[1,43,54,62,21,66,32,78,36,76,39];
var_dump(bublle_sort($arr));