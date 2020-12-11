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


$objStack = new Stack(5);


try {
    $objStack->push(1);
    $objStack->push(2);
    $objStack->push(3);
    $objStack->push(4);
    $objStack->push(5);
    $objStack->pop();
    $objStack->pop();
    $objStack->pop();
    $objStack->push(6);
    $objStack->push(7);
    $objStack->pop();
    $objStack->pop();
    $objStack->pop();
    $objStack->pop();
    echo $objStack->isEmpty();
} catch (Exception $e) {

    echo $e->getMessage();
}



echo "<pre>";
echo $objStack->top();
echo "<hr>";
print_r($objStack);
echo "</pre>";
