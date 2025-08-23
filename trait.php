<?php 

    //Traits 
    trait AnimalTrait {

        public function makeSound(){

            return "Vov vov";
        }
    }


    class AsianDog {

        //Property or Atributs
        public $name;
        public $color;

        //Constructor
        public function __construct($name,$color){

            $this->name = $name;
            $this->color = $color;
        }


        //Methods 
        use AnimalTrait;
    }

    $asianDog = new AsianDog('Alabay','White');
    echo $asianDog->makeSound();

    class EuropeDog {

        //Property or Atributs
        public $name;
        public $color;

        //Constructor 
        use AnimalTrait;

        public function makeSound(){
            return "Vov Vov";
        }
    }


?>