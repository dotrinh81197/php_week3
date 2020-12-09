<?php
include_once('shape.php');
include_once('resizeable.php');
class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name); // ghi de lop cha 
        $this->width = $width;
        $this->height = $height;
    }
    // tinh dien tich
    public function calculateArea()
    {
        return $this->height * $this->width;
    }
    // tinh chu vi
    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
    // thay doi kich thuoc
    public function resize()
    {
        $size = mt_rand(1, 100);
        $this->width = $this->width * $size;
        $this->height = $this->height * $size;
        return $this->width;
        return $this->height;
    }
    // dien tich sau khi thay doi kich thuoc
    public function calculateAreaAfterResize()
    {
        return $this->calculateArea();
    }
    // Chu vi sau khi thay doi kich thuoc
    public function calculatePerimeterAfterResize()
    {
        return $this->calculatePerimeter();
    }
}
