<?php
require_once 'Person.php';

class Man extends Person {
    private $_name,$_age;
   public function __construct($name, $age)
    {
        parent::__construct($name, $age,'男');
        $this->_name = $name;
        $this->_age = $age;
    }

    public function sayHello() {

        echo $this->_name.' Hello';
    }
}