<?php
class MyList
{
    private $size;
    private $element;
    private $value;
    private $key;

    public function __construct($size)
    {
        $this->size = $size;
        $this->element = [];
    }

    public function insert($index, $obj)
    {
        if (count($this->element) < $this->size) {
            foreach ($this->element as $this->key => $this->value) {
                if ($this->key == $index) {
                    array_splice($this->element, $index, 0, $obj);
                }
            }
        }
        return $this->element;
    }

    public function add($obj)
    {
        if (count($this->element) < $this->size) {

            array_push($this->element, $obj);
        }
    }

    public function remove($index)
    {
        /* Nếu index là số nguyên > 0 và bé hơn size*/
        if (is_integer($index) && $index >= 0 && $index < $this->size) {
            foreach ($this->element as $this->key => $this->value) {
                if ($this->key == $index) {
                    array_splice($this->element, $index, 1);
                }
            }
        }
        return $this->element;
    }

    public function get($index)
    {
        if ($this->isEmpty()) {
            throw new Exception("Array is Empty!!!");
        } else {
            return $this->element[$index];
        }
    }

    public function clear()
    {
    }

    public function addAll($arr)
    {
    }

    public function indexOf($obj)
    {
        foreach ($this->element as $index => $value) {
            if ($obj == $value) {
                return $index;
            }
        }
    }

    public function isEmpty()
    {
        return empty($this->element);
    }

    public function sort()
    {
        return sort($this->element);
    }

    public function reset()
    {
    }

    public function size()
    {
        return count($this->element);
    }
}
