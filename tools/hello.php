<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/5/24
 * Time: 下午8:55
 */
if(isset($_GET['name']) && $_GET['name']) {
    echo 'Hello'.$_GET['name'];

}else {
    echo '请输入名字';
}
?>
</body>
</html>

