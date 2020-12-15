<?php
include_once 'Node.php';
class LinkList extends Node
{
    /* Link to the first node in the list */
    public $firstNode;
    /* Link to the last node in the list */
    public $lastNode;
    /* Totals node in the list */
    public $count;

    public function __construct()
    {

        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    public function insertFirst($data)
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;

        if ($this->lastNode == NULL) {
            $this->lastNode = $node;
        }

        $this->count++;
    }

    public function insertLast($data)
    {
        if ($this->firstNode != NULL) {
            $node = new Node($data);

            $this->lastNode->next = $node;
            $node->next = NULL;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }
    public function totalNodes()
    {
        return $this->count;
    }

    public function readList()
    {
        $listData = [];
        $current = $this->firstNode;

        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}
