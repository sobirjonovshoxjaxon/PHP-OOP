<?php 
    namespace classes;

    class Dog {

        public $name;
        public static $color = 'Brown';

        const BREED = "Doberman";

        public function bark(){
            return self::BREED;
        }

        public function run(){
            return "running";
        }

        public static function eat(){
            return "eating";
        }
    }

?>