<?php
// tam giác có độ dài cạnh mặc định
include_once('Shape.php');
include_once('Triangle.php');

$triangle = new Triangle("Triangle", "Blue");
echo $triangle->toString()."<br>";
echo "<hr>";
//tam giác có độ dài cạnh tùy ý
$triangle = new Triangle("Triangle", "Blue",3,4,5);
echo "<h3>Ban đầu</h3>";
echo "Side1 = ".$triangle->getSide1();
echo " , Side2 = ". $triangle->getSide2();
echo " , Side3 = ". $triangle->getSide3()."<br>";
echo "Area = ".$triangle->getArea()."<br>";
echo "Perimeter = ".$triangle->getPerimeter()."<br>";
echo $triangle ->toString();
echo "<h3>Đặt lại</h3>";
$triangle->setSide1(6)->setSide2(7)->setSide3(8);
echo "Side1 = ".$triangle->getSide1();
echo " , Side2 = ". $triangle->getSide2();
echo " , Side3 = ". $triangle->getSide3()."<br>";
echo "Area = ".$triangle->getArea()."<br>";
echo "Perimeter = ".$triangle->getPerimeter()."<br>";
echo $triangle ->toString()

?>
