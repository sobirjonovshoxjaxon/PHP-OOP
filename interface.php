<?php 

    //Interface

    interface Animal{
        public function makeSound();
        public function eat();
        public function walk();
        public function sleep();
    }

    class Dog implements Animal{

        //Properties as Atributs
        public $name;
        public $color;
        protected $weight;
        private $size;

        //Constructor 
        public function __construct($name,$color){

            $this->name = $name;
            $this->color = $color;
        }

        //Methods
        public function makeSound(){
            echo "Vov vov";
        }

        public function eat(){
            echo "It is eat corn";
        }

        public function walk(){
            echo "It walks 1km every day";
        }

        public function sleep(){
            echo "It sleeps 7 hours a day";
        }
    }


    $buldog = new Dog('Buldog','Grey');
    

    var_dump($buldog);
    echo "<br>";
    echo $buldog->makeSound() . "<br>";
    echo $buldog->eat() . "<br>";
    echo $buldog->walk()  . "<br>";
    echo $buldog->sleep() . "<br>";


    class Cat implements Animal{

        public $name;
        public $color;

        public function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }

        //Properties as Atributs 
        public function makeSound(){
            return "Meow meow";
        }

        public function eat(){
            return 'Cat eats corn';
        }

        public function walk(){
            return 'It walks every';
        }

        public function sleep(){
            return 'it sleeps 7 hours a day';
        }
    }

    $cat = new Cat('Cat','White and Black');
    
    var_dump($cat);
    echo "<br>";
    echo $cat->makeSound();





?>