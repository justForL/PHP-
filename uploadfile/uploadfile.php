<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/5/31
 * Time: 下午9:05
 */
$file = $_FILES['file'];
$fileName = $file['name'];
move_uploaded_file($file['tmp_name'],$fileName);
echo "<img src='$fileName'>";
?>