<?php 

require_once './Node.php';

class DoublyLinkedList {
    private $_head = NULL;
    private $_totalNode = 0;

    // insert front
    public function insertFront($data) {
        // create a new node using data
        $newNode = new Node($data);

        if( $this->_head === NULL) {
            $this->_head = $newNode;
        } else {
            $currentNode = $this->_head;
            $this->_head = $newNode;
            $newNode->next = $currentNode;

        }

        $this->_totalNode++;
        return TRUE;
    }

    // insert back
    public function insertBack($data) {
        // create a new node using $data
        $newNode = new Node($data);

        if($this->_head === NULL) {
            $this->_head = $newNode;
        } else {
            $currentNode = $this->_head;
            while($currentNode->next !== NULL) {
                $currentNode = $currentNode->next;
            }
            // insert data to the next
            $currentNode->next = $newNode;
        }

        $this->totalNode++;
        return TRUE;
    }

    // insert Nth position
    public function insertAt($data, $pos) {
        $newNode = new Node($data);
        if($this->_head === NULL){
            $this->_head = $newNode;
        } else {
            $currentNode = $this->_head;
            for($i = 0; $i<$pos-1; $i++){
                $currentNode = $currentNode->next;
            }
            // mark previous node & add $newNode there 
            //also add $newNode next to the $currentNode
            $prevNode = $currentNode->prev;
            $prevNode->next = $newNode;
            $newNode->next = $currentNode;
        }
        $this->totalNode++;
    }
    // delete front
    public function deleteFront() {
        if($this->_head === NULL) {
            throw new Exception('LinkedList empty');
        } else {
            $currentNode = $this->_head;
            $nextNode = $currentNode->next;
            $this->_head = $nextNode;
        }
        $this->totalNode--;
        return TURE;
    }
    // delete back
    // Delete Nth position
    // delete by searching data
    // search by data
    // display list
}