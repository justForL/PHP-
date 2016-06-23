<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/6/23
 * Time: 下午7:39
 */

try {
    $pdo = new PDO('mysql:host=localhost;dbname=Myapp;','root','');
}catch (PDOException $e){
    die('数据库连接失败,原因:'.$e);
}
//将要执行的sql语句
//$sql = "SELECT * FROM users";
////返回的是statement 执行查询语句
//$stam = $pdo->query($sql);
////返回的是数组,查询到的结果
//$list = $stam->fetchAll(PDO::FETCH_ASSOC);//输出结果是键值对的形式
//print_r($list);

//简单写法 同上
$sql="SELECT * FROM users";
foreach($pdo->query($sql) as $val){
    echo $val['id'].'----'.$val['age'].'------'.$val['name'].'<br>';
}

//插入操作
//$sql="INSERT INTO users VALUES (null,'zhangsi',18)";
//$rel = $pdo->exec($sql);
//if($rel){
//    echo 'success';
//}else {
//    die('error');
//}

//删除操作
//$sql = "DELETE FROM users WHERE name = 'liuneng'";
//$rel = $pdo->exec($sql);
//if($rel){
//    echo 'success';
//}else {
//    die('error');
//}


//更新
//$sql="UPDATE users SET name ='zhaosi' WHERE id = 3";
//$rel = $pdo->exec($sql);
//if($rel){
//    echo 'success';
//}else {
//    die('error');
//}