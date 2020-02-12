<?php
include_once('Point.php');
class MoveablePoint extends Point
{
    public float $xSpeed;
    public float $ySpeed;
    public function __construct(float $x, float $y, float $xSpeed, float $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getXSpeed()
    {
        return $this->xSpeed;
    }
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function setSpeed(float $xSpeed, float $ySpeed)
    {
        self::setXSpeed($xSpeed);
        self::setYSpeed($ySpeed);
    }
    public function getSpeed()
    {
        return array(self::getXSpeed(), self::getYSpeed());
    }
    public function toString()
    {
        echo "Số x là : " . $this->x . " , Số y là : " . $this->y . " , xSpeed : " . $this->xSpeed . " , ySpeed : " . $this->ySpeed;
    }
    public function Move()
    {
        echo  "x = " . $this->x += $this->xSpeed;
        echo    " , y = " . $this->y += $this->ySpeed;
    }
}
