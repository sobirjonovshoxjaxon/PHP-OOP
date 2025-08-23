<?php 

    //Classes and Objects 

    class Car {

        //Atributes 
        public $model;
        public $color;
        public $type;


        //Methods
        public function drive($model){
            return "$model is driving";
        }

        public function get_model(){
            return $this->model;
        }

        public function set_color($color){
            $this->color = $color;
        }

    }

    //Object
    $volvo = new Car;
    $ford = new Car; 

    $volvo->model = 'Volvo';
    $volvo->color = 'white';
    $volvo->type = 'Eko';

    $ford->model = 'Ford';
    $ford->color = 'black';
    $ford->type = 'Desert car';
    $ford->setColor('Grey');

    /* 
        var_dump($volvo);
        var_dump($volvo->drive());
        echo $volvo->model; 
    */


    var_dump($ford);
    // echo $ford->drive($ford->model);
    // echo $ford->get_model();
    // echo $ford->color;

    


?>