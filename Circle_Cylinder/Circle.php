<?php
class Circle
{
    public $name;
    public  $radius;
    public $color;
    public function __construct(string $name, float $radius, string $color)
    {
        $this->name = $name;
        $this->radius = $radius;
        $this->color = $color;
    }
    public function getArea()
    {
        return pow($this->radius, 2) * pi();
    }
    public function getPerimeter()
    {
        return (2 * $this->radius * pi());
    }
    public function toString()
    {
        return "Bán kính : " . $this->radius . "<br>" . "Màu : " . $this->color;
    }
}
