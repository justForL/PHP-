<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/7/3
 * Time: 下午3:43
 */
//连接数据库
try {
    $pdo = new PDO("mysql:host=Localhost;dbname=myApp","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    die("连接数据库失败".$e->getMessage());
}
//执行操作
try{
    //开启事务
    $pdo->beginTransaction();
    //sql语句
    $sql = "insert into users(id,name,age,classId) VALUES (?,?,?,?)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute(array(null,"xiaohong",12,23));
    $stmt->execute(array(null,"xiaohong",12,23));
    $stmt->execute(array(null,"xiaohong",12,23));
    $stmt->execute(array(null,"xiaohong",12,23));

    $pdo->commit();

}catch (PDOException $e){
    die("操作失败".$e->getMessage());
    $pdo->roolBack();
}