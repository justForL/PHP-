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
 * Date: 16/6/13
 * Time: 下午8:35
 */

require_once "functions.php";

if(!empty($_GET['id'])){

    $conn = connetDatabase();
    if(!$conn){
        die('connet db fail');
    }else {

        $id = intval($_GET['id']);
        $result =  mysqli_query($conn,"SELECT * FROM users WHERE id = $id");
        if(mysqli_errno($conn)) {
            die('can not connect db');
        }
        $result_arr = mysqli_fetch_assoc($result);
    }
}else {
    die('id is empty');
}
?>

<form action="edituser_server.php" method="get">
    <div>
        id
    </div>
    <input type="text" name="id" value="<?php echo $result_arr['id']?>">
    <div>
        name
    </div>
    <input type="text" name="name"value="<?php echo $result_arr['name']?>">
    <div>
        age
    </div>
    <input type="text" name="age" value="<?php echo $result_arr['age']?>">
    <div>
        <input type="submit">
    </div>
</form>
</body>
</html>


