<?php
include_once('Point.php');
include_once('MoveablePoint.php');

$point = new Point(1, 2);
echo "x = " . $point->getX() . "<br>";
echo "y = " . $point->getY() . "<br>";
$point->setX(10);
$point->setY(20);
echo "<h4>set</h4>";
echo "x = " . $point->getX() . "<br>";
echo "y = " . $point->getY() . "<br>";
$point->setXY(40, 50);
var_dump($point->getXY());
echo "<br>";
$point->toString() . "<br>";
echo "<hr>";

$moveablePoint = new MoveablePoint(1, 2, 3, 4);
echo "xSpeed = " . $moveablePoint->getXSPeed() . "<br>";
echo "ySpeed = " . $moveablePoint->getYSPeed() . "<br>";
$moveablePoint->setXSpeed(6);
$moveablePoint->setYSpeed(7);
echo "<h4>set</h4>";
echo "xSpeed = " . $moveablePoint->getXSPeed() . "<br>";
echo "ySpeed = " . $moveablePoint->getYSPeed() . "<br>";
$moveablePoint->setSpeed(10, 11);
var_dump($moveablePoint->getSpeed());
echo "<br>";
$moveablePoint -> toString();
echo "<br>";
 $moveablePoint->Move();
