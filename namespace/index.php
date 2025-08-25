<?php 

    require_once __DIR__ . '/../autoloader.php';

    use classes\Dog;
    use classes\Cat;
    use classes\Fruit;
    use kitchen\Table;
    use html\Table as HTable;

    $cat = new Cat;
  
    $table = new HTable;
   
    $cat->name = "Kisa";
    var_dump($cat->name);


    var_dump($table);
    echo "<br>";

    echo Dog::BREED . "<br>";

    $cat2 = $cat;






?>