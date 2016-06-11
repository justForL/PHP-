<?php

$_link =@mysqli_connect('localhost','root','',$_db = 'myApp' );
//连接数据库失败
if(mysqli_connect_error()) {

    echo 'error';
}
//连接数据库成功
if(mysqli_select_db($_link,$_db)) {

    echo 'success'."<br>";
    //查询表中数据
    $rel = mysqli_query($_link,'SELECT * FROM users WHERE  id = 2');
    //循环输出结果
    //保存查询到的数据条数
    $dataCount = mysqli_num_rows($rel);
    echo '数据条数'.$dataCount.'<br>';
    //循环输出
    for($i = 0; $i < $dataCount; $i++) {
        print_r(mysqli_fetch_assoc($rel));
    }

    //查询个数(高效)
    $rel = mysqli_query($_link,'SELECT COUNT(*) FROM users');
    $rel_arr = mysqli_fetch_array($rel);
    echo '数据条数'.$rel_arr[0];

}
//对数据库操作完成 记得要关闭数据库
mysqli_close($_link);
?>