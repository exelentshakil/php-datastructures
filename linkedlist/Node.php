<?php

/**
 * Creating a empty node with data
 */

class Node {
    public $data = NULL;
    public $next = NULL;

    public function __construct($data = NULL) {
        
        $this->data = $data;

    }
}