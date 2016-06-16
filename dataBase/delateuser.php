<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/6/16
 * Time: 下午9:11
 */

require_once 'functions.php';

$id = $_GET['id'];
if(empty($id)) {
    die('id is empty');
}
$conn = connetDatabase();

if($conn) {

        echo 'get id';
        mysqli_query($conn,"DELETE FROM users WHERE id = $id");
    if(mysqli_error($conn)){
        die('delete fail');
    }else{
        header("Location:allusers.php");
    }
}else {
    die('打开数据库失败');
}