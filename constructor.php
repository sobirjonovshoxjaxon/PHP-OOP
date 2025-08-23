<?php 

    //Constructor 

    class Fruit {

        //Atributs & Properties
        public $name;
        public $color;

        //Constructor
        public function __construct($name, $color){

            $this->name = $name;
            $this->color = $color;
        }

        //Methods
        public function set_name($name){

            $this->name = $name;
        }

        public function get_name(){

            return $this->name;
        }
    }

    $apple = new Fruit('apple','red');
    $apple->set_name('Big Apple');

    $peach = new Fruit('peach','yellow');

    

   
?>