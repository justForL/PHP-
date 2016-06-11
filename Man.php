<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/5/16
 * Time: 下午9:51
 */
require_once "People.php";

class Man extends People {
    private $_name,$_age;

    public function __construct($name, $age)
    {
        parent::__construct($name,$age,'男');
        $this->_name = $name;
        $this->_age =$age;

    }
//    public function hi()
//    {
////        echo $this->_name.'say hi!';
//    }
}