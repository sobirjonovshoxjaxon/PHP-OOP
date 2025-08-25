<?php 

    //Static Property & Methods 
    /* 
    Static methodlar ichida Obyektlar ishlamayti masalan $this->name; yoki return $this->name bular umuman ishlamaydi. 
    Umuman olganda static property yoki methods lar classga tegishli bo'ladi ularni class nomi orqali chaqiramiz. 
    Ular umuman obyektlarga tegishli bo'lmaydi! 
    self, parent, public static $propertyname, public static function method1Name(){}
    */

    class Dog {

        public static $name = 'Bulldog'; // default
        public static $weight = '25 kg';

        

        public function run(){
            return 'running';
        }

        public static function eat(){
            return 'eating';
        }

        public function bark(){

            echo $this->run() . "<br>";
            echo self::eat() . "<br>";
            return "Vov vov";
        }

        public function get_weight(){
            return self::$weight;
        }
    }

    $bingo = new Dog;
    echo Dog::$name . "<br>";
    echo Dog::eat() . "<br>";
    echo $bingo->eat() . "<br>";
    echo $bingo->bark() . "<br>";
    echo $bingo->get_weight() . "<br>"; // This is work
    // echo $bingo->weight; // Error


    class Bulldog extends Dog {

        public function __construct(){
            parent::eat();
        }
    }








?>