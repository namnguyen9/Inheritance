<?php
include_once('Circle.php');
class Cylinder extends Circle
{
    public $height;
    public function __construct(string $name, float $radius, string  $color, float $height)
    {
        parent::__construct($name, $radius, $color);
        $this->height = $height;
    }
    public function Volume()
    {
        return parent::getArea() * $this->height;
    }
    public function toString()
    {
        return "Bán kính :" . $this->radius . "<br>" . "Màu : " . $this->color . "<br>" . "Chiều cao : " . $this->height;
    }
}
