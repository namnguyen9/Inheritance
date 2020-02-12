<?php
include_once('Shape.php');
class Triangle extends Shape
{
    public float $side1;
    public float $side2;
    public float $side3;
    public function __construct(string $name, string $color, float $side1 = 1.0, float $side2 = 1.0, float $side3 = 1.0)
    {
        parent::__construct($name, $color);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }
    //hàm trả về giá trị
    public function getSide1()
    {
        return $this->side1;
    }
    public function getSide2()
    {
        return $this->side2;
    }
    public function getSide3()
    {
        return $this->side3;
    }
    public function getArea()
    {
        return sqrt(self::getPerimeter() / 2 * (self::getPerimeter() / 2 - $this->side1) * (self::getPerimeter() / 2 - $this->side2) * (self::getPerimeter() / 2 - $this->side3));
    }
    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }
    public function toString()
    {
        return "Name : " . $this->name ."<br>". "Color : " . $this->color ."<br>". "Side1 = " . $this->side1 . " , Side2 = :" . $this->side2 . " , Side3 = " . $this->side3;
    }
    // hàm đặt lại giá trị
    public function setSide1($side1)
    {
        $this->side1 = $side1;
        return $this;
    }
    public function setSide2($side2)
    {
        $this->side2 = $side2;
        return $this;

    }
    public function setSide3($side3)
    {
        $this->side3 = $side3;
        return $this;

    }
}
