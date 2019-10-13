<?php

// create node 

class Node {
    public $data;
    public $prev = NULL;
    public $next = NULL;

    public function __construct($data) {
        $this->data = $data;
    }
}