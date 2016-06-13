<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/6/13
 * Time: 下午8:58
 */
require_once "functions.php";

if(empty($_GET['id'])) {
    die('id is empty');
}
if(empty($_GET['name'])) {
    die('name is empty');
}
if(empty($_GET['age'])) {
    die('age is empty');
}

$id = intval($_GET['id']);
$name = $_GET['name'];
$age = intval($_GET['age']);

$conn = connetDatabase();

mysqli_query($conn,"UPDATE  users SET name = '$name', age = $age WHERE id = $id");

if(mysqli_errno($conn)){
    die('写入失败');
}else {
    header("Location:allusers.php");
}