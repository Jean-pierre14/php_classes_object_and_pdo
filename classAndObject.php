<?php
    
    class Pie{
        protected $fruit;

        public function __construct($fruit){
            $this->fruit = $fruit;
        }
    }

    class Fruit{
        const APPLE = "apple";
        const MANGO = "mango";
        const STRAWBERRY = "strawberry";
    }

    $pie = new Pie(Fruit::APPLE);

    echo json_encode($pie);