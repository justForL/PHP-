<?php
/**
 * Created by PhpStorm.
 * User: Apple
 * Date: 16/6/23
 * Time: 下午7:25
 */

class A {
    private static $a = null;

    private  function __construct()  //构造函数
    {

    }

    static function makeA()  //oc中的单例  在php中叫单态类
    {
        if(self::$a == null){
            self::$a = new self();
        }
        return self::$a;
    }
}

print_r(A::makeA());