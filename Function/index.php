<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/5/25
 * Time: 下午9:06
 */
require_once 'Man.php';

$m = new Man("张三",18);

$m->sayHello();
Man::hi("李四",18,'男');