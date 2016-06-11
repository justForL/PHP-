<?php

/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/5/16
 * Time: 下午8:05
 */

class People {

    private $_name,$_age,$_sex;
    private static $num = 0;
    const MAX_MAN_NUM = 200;
    public function __construct($name,$age,$sex)
    {
        $this->_name = $name;
        $this->_age = $age;
        $this->_sex = $sex;
        People::$num++;
        if(People::$num > People::MAX_MAN_NUM) {
            throw new Exception ("不能创建更多的人了");
        }
    }

    public  function  hi() {
        echo $this->_name."say,Hi!";
    }
}