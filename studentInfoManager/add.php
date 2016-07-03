<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>增加学生信息</title>
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