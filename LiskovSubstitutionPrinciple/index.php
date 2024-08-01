<?php
interface ICalculableArea{
    public function area() : int;
}

class DordBucaqli implements ICalculableArea{
    protected int $width;
    protected int $height;
    public function __construct(int $width,int $height){
        $this->width=$width;
        $this->height=$height;
    }

    public function area(): int
    {
        return $this->width*$this->height;
    }
}

class Circle implements ICalculableArea{
    protected int $radius;
    public function __construct(int $radius){
        $this->radius=$radius;
    }
    
    public function area(): int
    {
        return pow($this->radius,2);
    }

}

class FiqurArea{
    public function calcArea(ICalculableArea $iCalculableArea) : int{
        return $iCalculableArea->area();
    }
}
$fiqurArea=new FiqurArea();
echo $fiqurArea->calcArea(new DordBucaqli(10,20));
echo '<br>';
echo $fiqurArea->calcArea(new Circle(25));
