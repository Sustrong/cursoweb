<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Fruit {
        public $name="pepito";
        function set_name($name) {
            $this->name = $name;
        }
    }
    echo "Este es el Objeto $apple: ";
    $apple = new Fruit();
    echo $apple->name;//pepito
    $apple->set_name("apple");
    echo $apple->name;//apple
    $apple->set_name("orange");
    echo $apple->name;//orange
    echo "<br> Este es otro objeto $orange: ";
    $orange = new Fruit();
    echo $orange->name;
    $orange->set_name("orange");
    echo $orange->name="naranja";
    echo "Mi fruta preferida es la  " . $orange->name;
    ?> 


    
    
</body>
</html>