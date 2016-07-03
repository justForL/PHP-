<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改学生信息</title>
</head>
<body>
<?php
include("menu.php")
?>
<form action="action.php?action=add" method="post">
    姓名:<input name="name" type="text"><br>
    年龄:<input name="age" type="text"><br>
    班级:<input name="classId" type="text"><br>
    <input type="submit">
    <input type="reset">
</form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/6/26
 * Time: 下午5:11
 */

$pdo = new PDO("mysql:host=localhost;dbname=myApp","root","");
if($pdo){
$sql = "update users set name = 'hahaha' where id = {$_GET['id']} ";
    $rel = $pdo->exec($sql);
    if($rel){
        header("Location:idenx.php");
    }
}else{
    die("打开数据库失败");
}