<?php 


    //Autoloader 
   
    spl_autoload_register(function ($class_name) {
        // namespace\ ni path ga aylantiramiz
        $path = __DIR__ . '/namespace/' . str_replace("\\", "/", $class_name) . ".php";
        if (file_exists($path)) {
            include $path;
        } else {
            echo "Fayl topilmadi: $path <br>";
        }
    });


?>