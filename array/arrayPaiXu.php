<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/6/19
 * Time: 下午10:08
 */

$arr = array(3,5,7,4,2,8,9,11,23);
$len = count($arr);
print_r($arr);
for($i=0; $i<$len-1; $i++) {
    for($k=0; $k<$len-$i-1; $k++) {
        if($arr[$k]>$arr[$k+1]){
            $temp = $arr[$k];
            $arr[$k] = $arr[$k+1];
            $arr[$k+1] = $temp;
        }
    }
}
print_r($arr);