<?php
include_once('Point2D.php');
include_once('Point3D.php');

$point2D  = new Point2D(6, 8);
echo "x = " . $point2D->getX() . "<br>";
echo "y = " . $point2D->getY() . "<br>";
$point2D->setX(10);
$point2D->setY(20);
echo "<h4>set</h4>";
echo "x = " . $point2D->getX() . "<br>";
echo "y = " . $point2D->getY() . "<br>";
$point2D->setXY(40, 50);
echo $point2D->getXY();
$point2D->toString() . "<br>";
echo "<hr>";

$point3D = new Point3D(1, 2, 3);
echo "Z = " . $point3D->getZ();
$point3D->setZ(4);
echo "<h4>set</h4>";
echo "Z = " . $point3D->getZ() . "<br>";
$point3D->setXYZ(5, 6, 7);
echo $point3D->getXYZ() . "<br>";
echo $point3D->toString();
