<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/5/15
 * Time: 下午8:31
 */
//require_once "Hello.php";
//$h = new Hello();
//$h ->sayHello();



require_once 'jkxy/Hello.php';
require_once 'jikexueyuan/Hello.php';
require_once 'Man.php';
//
//$h = new \jkxy\Hello();
//$j = new \jikexueyuan\Hello();
//echo $j->sayHello();
//echo $h->sayHello();

//$m = new Man('张三',18);
//$m = new People('李四',23);
////$m->getName();
////$m->getAge();
//for($i=0;$i<300;$i++) {
//    new People('张三',18);
//}

$m = new Man('张三',18);
$m->hi();