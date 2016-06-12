<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/6/12
 * Time: 下午9:19
 */
require_once "functions.php";

$name = $_POST['name'];
if(!isset($name)) {
    die('no username');
}
$age = $_POST['age'];
if(!isset($age)) {
    die('no userage');
}
if(empty($name)) {
    die('name is empty');
}
if(empty($age)) {
    die('age is empty');
}
$conn = connetDatabase();
if($conn) {
$age = intval($age);
    //给name加上引号可以防注入,写的时候要注意,intval也是防注入
    mysqli_query($conn,"INSERT INTO users(name,age) VALUES ('$name',$age)");
    if(mysqli_errno($conn)) {
       die('insert error');
    }else {
        header("Location:allusers.php");
    }
}else {
    die('cant open db');
}