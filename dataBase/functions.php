<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/6/7
 * Time: 下午9:05
 */
require_once "configer.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table style="text-align: left" border="1">
    <tr><th>id</th><th>name</th><th>age</th></tr>
    <a href="adduser.html">添加用户</a>
    <?php
    function connerDb() {
        $conn = mysqli_connect(MYSQL_HOST,MYSQL_USERNAME,MYSQL_PW);
        if ($conn) {
//                echo '连接数据库成功'."<br>";
            if(mysqli_select_db($conn,'myApp')){
                $rel = mysqli_query($conn,"SELECT * FROM users ORDER BY id ASC ");
                $dataCount= mysqli_num_rows($rel);
                for($i = 0; $i < $dataCount; $i++) {
                    $rel_arr = mysqli_fetch_assoc($rel);
//                        print_r($rel_arr);
                    $id = $rel_arr['id'];
                    $name= $rel_arr['name'];
                    $age = $rel_arr['age'];

                    echo "<tr><td>$id</td><td>$name</td><td>$age</td></tr><a href='edituser.php?id=$id'>修改</a> ";
                }
//                    echo $dataCount;
            }else {
                die('打开表失败');
            }
        }else {
            die('连接数据库失败');
        }
        mysqli_close($conn);
    }

    function connetDatabase() {
        $conn = mysqli_connect(MYSQL_HOST,MYSQL_USERNAME,MYSQL_PW);
            mysqli_select_db($conn,'myApp');
            return $conn;
    }
    ?>
</table>

</body>
</html>
