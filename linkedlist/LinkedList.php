<?php 

include_once 'Node.php';

class LinkedList {
    private $_head = NULL;
    private $_totalNodes = 0;


    // Add a new node to the list
    //  MA, D, NN    MA, D, NN     MA, D, NN   MA, D, NN
    // 108, 8, 104, 116, 14, 124, 124, 14, NULL,  132,  0, NULL

    public function add($data) {
        
        $newNode = new Node($data);

        if( $this->_head === NULL) {
            $this->_head = &$newNode;
        } else {
            $currentNode = $this->_head;
        
            while($currentNode->next !== NULL) {
                $currentNode = $currentNode->next;
            }

            $currentNode->next = &$newNode;
        }

        $this->_totalNodes++; 
        return TRUE;
    }

    public function display() {
        $currentNode = $this->_head;
        echo 'Total Book '. $this->_totalNodes. '<br>';
        while($currentNode !== NULL) {
            echo $currentNode->data . '<br>';
            $currentNode = $currentNode->next;
        }
    }


}


