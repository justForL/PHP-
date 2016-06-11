<?php
class Person {
    function __construct($name,$age,$sex)
    {

    }
    public function hi($name,$age,$sex) {
        echo $name.'今年'.$age.'岁了';
    }
}