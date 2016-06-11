<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/5/23
 * Time: 下午9:49
 */

//$arr = array(1,2,4,5,"name"=>"James","age"=>"18");
//echo json_encode($arr);

$jsonStr = '{"0":1,"1":2,"2":4,"3":5,"name":"James","age":"18"}';
//echo json_encode($arr);
$obj = json_decode($jsonStr);
print_r($obj);
echo $obj->name;
