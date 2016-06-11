<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/5/23
 * Time: 下午10:25
 */

//文件的写操作
//$f = fopen("data","w");
//if($f) {
//    fwrite($f,"Hello Php");
//    fclose($f);
//    echo "ok";
//}else {
//    echo "error";
//}

//文件的读操作
//
//$f = fopen('data','r');
//while(!feof($f)) {
//    $content = fgets($f);
//    echo $content.'<br>';
//}

echo file_get_contents('data');