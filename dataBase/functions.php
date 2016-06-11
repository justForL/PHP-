<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/6/7
 * Time: 下午9:05
 */
require_once "configer.php";

function connerDb() {
    $conn = mysqli_connect(MYSQL_HOST,MYSQL_USERNAME,MYSQL_PW);
    if ($conn) {
        echo '连接数据库成功';

        if(mysqli_select_db($conn,'myApp')){
            $rel = mysqli_query($conn,"SELECT * FROM users");
            $dataCount= mysqli_num_rows($rel);
            for($i = 0; $i < $dataCount; $i++) {
                $rel_arr = mysqli_fetch_assoc($rel);
                print_r($rel_arr);
            }
            echo $dataCount;
        }else {
            die('打开表失败');
        }
    }else {
        die('连接数据库失败');
    }
}