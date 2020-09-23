<?php

 class Square {
   public $side;

   public function __construct($side) {
     $this -> side = $side;
   }

   public function getSide() {
     return $this -> side;
   }
   public function getArea() {
     return $this -> getSide() ** 2;
   }

   public function getPerimeter() {
     return $this -> getSide() * 4;
   }

   public function __toString() {
     return   'Square:<br>'
            . 'Area = ' . $this -> getArea() . '<br>'
            . 'Perimeter = ' . $this -> getPerimeter();
   }
 }

 class Cube extends Square{

   public function getVolume() {
     return parent::getSide() ** 3;
   }

   public function getPerimeter() {
     return parent::getArea() * 6;
   }

   public function __toString() {
     return   'Cube:<br>'
            . 'Volume = ' . $this -> getVolume() . '<br>'
            . 'Perimeter = ' . $this -> getPerimeter();
   }
 }


 $square = new Square(2);
 echo  $square;
 echo '<br><br>';
 $cube = new Cube(3);
 echo $cube;

?>
