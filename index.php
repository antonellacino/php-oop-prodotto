<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-prodotto</title>
</head>
<body>
    <?php

    class Product {
        public $peso;
        public $height;
        public $width;

        public function __construct($peso, $height, $width){
            $this->peso = $peso;
            $this->height = $height;
            $this->width = $width;
        }

        public function printMe(){
            echo "Io sono un articolo!<br> Ho un peso di: " . $this->peso."<br> Un' altezza di: " . $this->height."<br> Una grandezza di: " . $this->width;
        }
    }

    $article=new Product(10,2,5);
    $article->printMe();
;
    
    ?>
</body>
</html>