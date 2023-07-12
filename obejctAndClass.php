<?php

    class MyClass {
        public $a = 1;
        public static $b = 2;
        const C = 3;
        public function d(){return 4;}
        public static function e(){return 5;}
    }

    $object = new MyClass();
    var_dump($object->a); // int(1)