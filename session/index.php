<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/6/1
 * Time: 下午8:51
 */
session_start();
//echo session_id();

$_SESSION['name'] = 'jikexueyuan';
session_destroy();
header('Location:a.php');