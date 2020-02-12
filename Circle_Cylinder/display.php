<?php
include_once('Circle.php');
include_once('Cylinder.php');
//hình tròn
$circle = new Circle("Hình tròn", 5, "blue");
echo $circle->name . "<br>";
echo "Diện tích : " . $circle->getArea() . "<br>";
echo "Chu vi : " . $circle->getPerimeter() . "<br>";
echo $circle->toString() . "<hr>";
//hình trụ 
$cylinder = new Cylinder("Hình trụ", 10, "red", 8);
echo $cylinder->name . "<br>";
echo "Thể tích : " . $cylinder->Volume() . "<br>";
echo $cylinder->toString();
?>
