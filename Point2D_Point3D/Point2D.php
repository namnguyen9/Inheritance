<?php
class Point2D
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
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function setXY(float $x, float $y)
    {
        array($this->x = $x, $this->y = $y);
    }
    public function getXY()
    {
        return "x = " . $this->x . "  y = " . $this->y;
    }
    public function toString()
    {
        echo "Số x là : ".$this->x ." ,Số y là : ".$this->y;
    }
}
