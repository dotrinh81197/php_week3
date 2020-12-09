<?php
include_once('shape.php');
include_once('resizeable.php');
class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }
    // change circle radius
    public function resize()
    {
        return $this->radius = $this->radius * mt_rand(1, 100);
    }
    public function calculateAreaAfterResize()
    {
        return $this->calculateArea();
    }
    public function calculatePerimeterAfterResize()
    {
        return $this->calculatePerimeter();
    }
}
