<?php 

    // Constants = Konstantalar

    class Goodbye {

        const LEAVING_MESSAGE = "Thank you for visiting my github repository";

        public function byebye(){

            echo self::LEAVING_MESSAGE;
        }
        
    }

    $goodbye = new Goodbye;
    echo $goodbye->byebye() . "<br>";

    echo Goodbye::LEAVING_MESSAGE;
    


?>