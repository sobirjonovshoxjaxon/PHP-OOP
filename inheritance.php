<?php 

    //Inheritance 

    //Parent class
    class Fruit{

        //Properties 
        public $name;
        public $color;
        public $weight;

        //Constructor
        public function __construct($name,$color,$weight){

            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }

        //Methods 

        public function sell($name){
            return "This $name is selling right now";
        }

        public function get_weight($weight){
            return "This fruit's weight is $weight kg";
        }
    }

    //Inheritance: Child class
    class  Apple extends Fruit{

        //Properties 
        public $tam;
        public $type;

        //methods
        public function eating($name){
            return "This $name is eating";
        }

        public function get_type($type){
            return "This Apple type is $type";
        }

    }

    //Object
    $apple = new Apple('Apple','Red','0.1');
    $apple->tam = 'Shirin va Yangi uzilgan';
    $apple->type = 'Golden';
 
        var_dump($apple) . "<br>";
        echo $apple->sell($apple->name) . "<br>";
        echo "<br>";
        echo $apple->get_weight($apple->weight) . "<br>"; 

        echo $apple->tam . "<br>";
        echo $apple->type . "<br>";
        echo $apple->eating($apple->name) . "<br>";
        echo $apple->get_type($apple->type);




?>