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
            echo "Io sono un articolo!<br> Ho un peso di: " . $this->peso."<br> Un' altezza di: " . $this->height."<br> Una grandezza di: " . $this->width."<br>";
        }
    }

    $article=new Product(10,2,5);
    $article->printMe();

    //---------------------------------------------------------------------------
    class Fruit{
        public $name;
        public $color;
        public $peso;
        public $price;
        
        public function __construct($name,$color,$peso,$price){
            $this->name=$name;
            $this->color=$color;
            $this->peso=$peso;
            $this->price=$price;            
        }
        public function printMe(){
            return "<br>Io sono un/una: ".$this->name."<br> Ho un colore: " . $this->color."<br> Peso: " . $this->peso." grammi <br>Prezzo: " . $this->price. " cent <br>";
        }
    }
    
    $apple = new Fruit("apple","red",90,0.2);
    echo $apple->printMe();
//----------------------------------------------------
    class Exotic extends Fruit{
        public $provenance;
        public function __construct($name,$color,$peso,$price,$provenance){
            parent::__construct($name,$color,$peso,$price);
            $this->provenance = $provenance; 
        }
        
        public function printMe(){
            $text = parent::printMe();
            return $text."Provenienza: ".$this->provenance;
        }
    }
       $mango = new Exotic("mango","red",90,1.50,"Jamaica");
       echo $mango->printMe();
    ?>
</body>
</html>