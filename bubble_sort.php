<?php
/**
 * Created by PhpStorm.
 * User: lwq11
 * Date: 2019/5/22
 * Time: 20:45
 */
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

$arr=[2,5,8,3];
var_dump(bublle_sort($arr));