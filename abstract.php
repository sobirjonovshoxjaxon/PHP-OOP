<?php 

    //Abstract class 

    abstract class Fruit {

        //Properties and Atributs
        public $name;
        public $color;
        public $weight;
        public $tam;


        //Constructor 
        public function __construct($name,$color,$weight,$tam){

            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
            $this->tam = $tam;
        }

        //Methods 

        public function eating($name){

            return "This $name fruit is very delicious";
        }

        public function get_color(){

            return $this->color;
        }
    }

    // $apple = new Fruit('Apple','Red','50 gr','delicious'); //Error Because Abstract class can not create object 


    // Inheritance 
    class Banana extends Fruit{


    }

    //Object
    $banana = new Banana('Banana','Yellow','58 gr','Yummy');

    var_dump($banana) ;
    echo "<br>";
    echo $banana->eating('Banana') . "<br>";
    echo $banana->get_color() . "<br>";



?>