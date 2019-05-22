<?php

// 插入排序
function insert_sort($arr) {
    for($i=1;$i<count($arr); $i++) {
        $tmp = $arr[$i];
        // 比较并插入
        for($j=$i-1;$j>=0;$j--) {
            if($tmp < $arr[$j]) {
                //发现插入的元素要小则将后边的元素与前面的元素互换
                $arr[$j+1] = $arr[$j];
                $arr[$j] = $tmp;
            } else {
                break;
            }
        }
    }
    return $arr;
}

$arr=[3,6,1,7,2];
var_dump(insert_sort($arr));
