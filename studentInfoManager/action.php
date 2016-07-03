<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/6/26
 * Time: 下午5:11
 */



try {
    //1.连接数据库
    $pdo = new PDO('mysql:host=localhost;dbname=Myapp','root','');

}catch(PDOException $e) {

    die('连接数据库失败'.$e->getMessage());

}



switch($_GET['action']){
    case "add":
        if(empty($_POST['name'])){
            die('请填写名字');
        }
        if(empty($_POST['age'])){
            die('请填写年龄');
        }
        if(empty($_POST['classId'])){
            die('请填写班级');
        }
        $name=$_POST['name'];
        $age = intval($_POST['age']);
        $classid = intval($_POST['classId']);
        $sql = "INSERT INTO users VALUES (null,'$name',$age,$classid)";
        $rel = $pdo->exec($sql);
        echo $rel;
        if($rel>0){
            echo 'success';
            header('Location:idnex.php');
        }else {
            die('error');
        }
        break;

    case "del":
        $id= $_GET['id'];
        $sql = "delete from users WHERE id={$id}";
        echo $sql;
        $rel = $pdo->exec($sql);
        if($rel){
            header("Location:idnex.php");
        }else {
            print_r($pdo->errorInfo());
            die('delete fail');
        }

    break;
}

