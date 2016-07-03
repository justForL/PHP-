<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/7/3
 * Time: 上午9:45
 */

//连接数据库
try{
    $pdo = new PDO("mysql:host=localhost;dbname=myApp","root","");
}catch (PDOException $e){
    die("连接失败".$e->getMessage());
}

$sql = "insert into users(id,name,age,classId) VALUES (?,?,?,?)";

$state = $pdo->prepare($sql);
//第一种方法

//$state->bindValue(1,null);
//$state->bindValue(2,"asdfghj");
//$state->bindValue(3,13);
//$state->bindValue(4,22);

$state->bindParam(1,$id);
$state->bindParam(2,$name);
$state->bindParam(3,$age);
$state->bindParam(4,$classId);
$id= null;
$name = "sss";
$age=34;
$classId = 66;
$state->execute();

echo $state->rowCount();

