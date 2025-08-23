<?php

    //Access Modifiers

    /* 
        Bular 3 xil bo'ladi 
        1.public
        2.protected
        3.private
    */


    class Car{

        //Property
        public $model;
        protected $color;
        private $year;

        //Constructor
        public function __construct($model,$color,$year){

            $this->model = $model;
            $this->color = $color;
            $this->year = $year;
        }

        //Methods 
        public function drive($model){

            return "This $model car is very fast";
        }

        public function fuel($color){
            return "This car's color is $color so It is fueling gas";
        }

        public function get_color(){
            return $this->color;
        }

        public function get_year(){
            return $this->year;
        }

    }

    $ford = new Car('Ford','Black',2025);

    var_dump($ford) . "<br>";
    echo $ford->model . "<br>";
    echo $ford->fuel('Black') . "<br>";
    echo $ford->drive($ford->model) . "<br>";
    echo $ford->get_color('Black') . "<br>";
    echo $ford->get_year(). "<br>";


    //Inheritance 
    class Volvo extends Car {

        //Property & Atributs
        public $speed;
        protected $weight;
        private $driver;


        //Methods
        public function set_speed($s){
            $this->speed = $s;
        }

        protected function set_weight($w){
            $this->weight = $w;
        }

        private function set_driver($d){
            $this->driver = $d;
        }

    }

    //Object
    $volvo = new Volvo('Volvo','White',2020);

    $volvo->speed = '220 km/h'; // True 
    // $volvo->weight = '2000 kg'; // Error
    // $volvo->driver = 'Murod'; // Error 


    var_dump($volvo) . "<br>";
    echo $volvo->model . "<br>";
    echo $volvo->get_color('White') . "<br>";
    echo $volvo->get_year() . "<br>";

    echo $volvo->speed . "<br>";
    // echo $volvo->set_driver('Murod'); //Error
    // echo $volvo->set_weight('2000 kg'); //Error

    


  




?>