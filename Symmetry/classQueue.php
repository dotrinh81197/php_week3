<?php
class Queue
{
    public $queue = [];
    public $limit;

    //* Hàm khởi tạo *//
    public function __construct($limit)
    {
        $this->limit = $limit;
    }

    //* Thêm phần tử vào queue *//
    public function enqueue($item)
    {
        if ($this->isFull()) {
            throw new Exception("Queue is full , can't push Item");
        } else {
            $this->queue[] = $item;
        }
    }

    //* Xóa phần tử khỏi queue *//
    public function dequeue()
    {
        if ($this->isEmpty()) {
            throw new Exception("Queue is Empty , can't delete Item");
        }
        array_shift($this->queue);
    }

    //* Lấy phần tử đầu tiên của queue mà không xóa nó *//
    public function peek()
    {
        if ($this->isEmpty()) {
            throw new Exception("Queue is Empty, can't show this Item");
        } else {
            return current($this->queue);
        }
    }

    public function isEmpty()
    {
        if (count($this->queue) == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function isFull()
    {
        if (count($this->queue) == $this->limit) {
            return true;
        } else {
            return false;
        }
    }
}
