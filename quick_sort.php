<?php

// 快速排序
function quick_sort($arr)
{
    if (count($arr) <= 1){
        return $arr;
    }
    // 取数组中间索引
    $index = (int)floor(count($arr) / 2);
    $value = $arr[$index];
    // 移除中间元素
    array_splice($arr, $index, 1);
    // 初始化左右数组
    $a_left = $a_right = [];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $value) {
            array_push($a_left, $arr[$i]);
        } else {
            array_push($a_right, $arr[$i]);
        }
    }
    $a_left = quick_sort($a_left);
    $a_right = quick_sort($a_right);
    array_push($a_left, $value);
    // 合并左右数组
    return array_merge($a_left, $a_right);
}

$arr=[2,6,3,9];
var_dump(quick_sort($arr));