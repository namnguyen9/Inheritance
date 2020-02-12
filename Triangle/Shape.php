<?php
class Shape
{
    public string $name;
    public string $color;
    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function show()
    {
        echo "Name : " . $this->name ."<br>". "Coler : " . $this->color ;
    }
}
?>
