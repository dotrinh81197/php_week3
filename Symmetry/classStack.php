<?php
class Stack
{
    public $stack;
    public $limmit;
    public function __construct($limmit)
    {
        $this->stack = [];
        $this->limmit = $limmit;
    }

    public function push($obj)
    {
        if ($this->isFull()) {

            throw new Exception("Stack was limmited");
        }
        return  array_unshift($this->stack, $obj);
    }
    // delete 1 phan tu vua them vao
    public function pop()
    {
        if ($this->isEmpty()) {
            throw new Exception("Stack is empty!");
        } else {
            return  array_shift($this->stack);
        }
    }

    function top()
    {
        return current($this->stack);
    }

    function isEmpty()
    {
        return empty($this->stack);
    }

    function isFull()
    {
        if (count($this->stack) == $this->limmit) {
            return true;
        } else {
            return false;
        }
    }
}
