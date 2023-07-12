<?php

    class trick{
        public function doit(){
            echo __FUNCTION__;
        }
        public function doitagain(){
            echo __METHOD__;
        }
    }

    $obj = new trick();
    $obj->doit();
    $obj->doitagain();