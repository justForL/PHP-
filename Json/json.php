<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/5/25
 * Time: 下午10:01
 */
$arr = [1,2,3,4,5,'H'=>'Hello'];
echo json_encode($arr).'<br>';

$str = "{\"0\":1,\"1\":2,\"2\":3,\"3\":4,\"4\":5,\"H\":\"Hello\"}";
$obj = json_decode($str);
print_r($obj);