<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
class ArrayList
{
    //khỏi tạo
    public array $arraylist;
    public function __construct($array)
    {
        if ($array->isEmpty()) {
          
        } 
        $this->arraylist = $array;
    }
    //duyệt
    public function ForArray()
    {
        foreach ($this->arraylist as $value) {
            echo $value;
        }
    }
    public function Seach($value)
    {
        foreach ($this->arraylist as $val) {
            if ($value == $val) {
                echo $val;
            } else {
                echo "Không tìm thấy";
            }
        }
    }
    public function Add($value)
    {
        for ($i = 0; $i < count($this->arraylist); $i++) {
            $value->add($i, $$this->arraylist[$i]);
        }
    }
    public function Delete()
    {
        array_pop($this->arraylist);
    }
}
