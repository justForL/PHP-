<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/6/23
 * Time: 下午8:50
 */

try{
    $pdo = new PDO('mysql:host=localhost;dbname=Myapp1;','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}catch (PDOException $e){
    die('打开数据库失败'.$e->getMessage());
}

$sql = "insert into users VALUES (null,name = 'lengjian',age = 25)";
$rel = $pdo->exec($sql);
if($rel){
    echo 'success';
}else {
    die('error');
}