<?php
/**
 * Created by PhpStorm.
 * User: lwq11
 * Date: 2019/5/22
 * Time: 20:11
 */
function quick_sort($arr){
    if (!is_array($arr)){
        die('please input array');
    }
    if(count($arr)<=1){
        return $arr;
    }else{
       // $len=;
        $index=(int)floor(count($arr)/2);
        $value=$arr[$index];
        array_splice($arr,$index,1);
        $l_arr=$r_arr=[];
        for($i=0;$i<count($arr);$i++){
            if ($arr[$i]>$value){
                array_push($r_arr,$arr[$i]);
            }else{
                array_push($l_arr,$arr[$i]);

            }
        }
        $l_arr=quick_sort($l_arr);
        $r_arr=quick_sort($r_arr);
        array_push($l_arr,$value);
        return array_merge($l_arr,$r_arr);
    }

}

$arr=[2,6,3,9];
var_dump(quick_sort($arr));