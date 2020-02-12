<?php
class Point
{
    public float $x;
    public float $y;
    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setX(float $x)
    {
        $this->x = $x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setY(float $y)
    {
        $this->y  = $y;
    }
    public function setXY(float $x, float $y)
    {
        self::setX($x);
        self::setY($y);
    }
    public function getXY()
    {
        return array($this->x, $this->y);
    }
    public function toString()
    {
        echo "Số x là : " . self::getX() . "Số y là : " . self::getY();
    }
}
