<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/6/16
 * Time: 下午10:56
 */

//求以下数组的最大值 和最小值以及他们的下标
$arr = array(3,8=>5,'dd1'=>6,2,11=>9,4);
$count = count($arr);

//$max=1 ;
//for($i = 0 ; $i < $count ; $i ++){
//
//    $k = key($arr);
//    $v = current($arr);
//    if($v > $max){
//        $max = $v;
//    }
//    next($arr);
//}
//echo $max;

$max = $min = reset($arr);//取出数组内的第一项元素
$maxPos = $minPos = key($arr);
foreach($arr as $k=>$v){
    if($v > $max) {
        $max = $v;
        $maxPos = $k;
    }elseif($v < $min ) {
        $min = $v;
        $minPos = $k;
    }
}
print_r($arr).'<br>';
//并将他们的位置交换
$temp = $max;
$arr[$maxPos] = $arr[$minPos];
$arr[$minPos] = $temp;

print_r($arr);

