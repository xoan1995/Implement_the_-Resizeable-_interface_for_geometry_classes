<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');
$circle=new Circle('Circle One',4);
echo 'Circle area:'.$circle->calculateArea().'<br>';
echo 'Circle Perimeter:'.$circle->calculatePerimeter().'<br>';

$cylinder= new Cylinder('Cylinder One',4,8);
echo 'Cylinder Area'.$cylinder->calculateArea().'<br>';
echo 'Cylinder Perimeter:'. $cylinder->calculatePerimeter().'<br>';

$rectangle=new Rectangle('Rectangle One',4,7);
echo 'Rectangle area:'.$rectangle->calculateArea().'<br>';
echo 'Rectangle Perimeter'.$rectangle->calculatePerimeter().'<br>';

$square=new Square('Square One',4);
echo 'Square area:'.$rectangle->calculateArea().'<br>';
echo 'Square Perimeter'.$rectangle->calculatePerimeter().'<br>';

