<?php

// 斐波那契数列
function fibonacci($n){
    if($n<=0){
        die('Error');
    }
    if ($n==1 || $n==2){
        return 1;
    }else{
        return fibonacci($n-1)+fibonacci($n-2);
    }
}

echo fibonacci(3);