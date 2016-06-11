<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/6/1
 * Time: 下午8:53
 */
session_start();

if(isset($_SESSION['name'])) {
    echo $_SESSION['name'];
}else {
    echo 'Not found Name';
}
