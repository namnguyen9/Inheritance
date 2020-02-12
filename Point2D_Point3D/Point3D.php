<?php
class Point3D extends Point2D
{
    public float $z;
    public function __construct(float $x, float $y, float $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }
    public function getZ()
    {
        return  $this->z;
    }
    public function setZ($z)
    {
        $this->z = $z;
    }
    public function setXYZ(float $x, float $y, float $z)
    {
        array(parent::setXY($x, $y), $this->z = $z);
    }
    public function getXYZ()
    {
        return parent::getXY() . " z = " . $this->z;
    }
    public function toString()
    {
        echo parent::toString() . ",Số z là : " . $this->z;
    }
}
