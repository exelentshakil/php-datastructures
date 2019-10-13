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

            // Go to the prev position of given position :)
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
        return TRUE;
    }
    // delete front
    public function deleteFront() {
        if($this->_head === NULL) {
            throw new Exception('Empty linked list');
        } else {
            $currentNode = $this->_head;
            $nextNode = $currentNode->next;
            $this->_head = $nextNode;
        }
        $this->totalNode--;
        return TRUE;
    }
    // delete back
    public function deleteBack() { 
        if($this->_head === NULL) {
            throw new Exception('Empty linked list');
        } else {
            $currentNode = $this->_head;
            while($currentNode->next !== NULL) {
                $currentNode = $currentNode->next;
            }
            $prevNode = $currentNode->prev;
            $prevNode->next = NULL;
        }

        $this->_totalNode--;
        return TRUE;
    }
    // Delete Nth position
    public function deleleAt($pos) {
        // check if head node empty
        if($this->_head === NULL) {
            throw new Exception('Empty linked list');
        } else {
            $currentNode = $this->_head;
            // Go to the prev position of given position :)
            for($i=0; $i<$pos-1; $i++) {
                $currentNode = $currentNode->next;
            }
            // select prev and next node from current node 
            $prevNode = $currentNode->prev;
            $nextNode = $currentNode->next;
            // add the next node to the previous node's next
            $prevNode->next = $nextNode;

        }

        $this->_totalNode--;
        return TRUE;
    }
    // delete by searching data
    public function deleteData($data) {
        // check if head node empty
        if($this->_head === NULL) {
            throw new Exception('Empty linked list');
        } else {
            // set head node to a temp as current node
            $currentNode = $this->_head;
            while($currentNode->next !== NULL) {
                if($currentNode->data === $data) {
                    $currentNode = $currentNode->next;
                }
                $currentNode = $currentNode->next;
            }
            $prevNode = $currentNode->prev;
            $nextNode = $currentNode->next;

            $prevNode->next = $nextNode;
        }
    }
    
    // search by data
    public function search($data) {
        if($this->_head === NULL) {
            throw new Exception('404 not found');
        } else {
            $currentNode = $this->_head;
            while($currentNode->next !== NULL) {
                if($currentNode->data === $data) {
                    $currentNode = $currentNode->next;
                }
                $currentNode = $currentNode->next;
            }
        }

        return $currentNode;
    }

    // display list
    public function all() {
        $currentNode = $this->_head;
        
        echo 'Total node : '. $this->_totalNode. '<br>';
        while($currentNode !== NULL) {
            echo $currentNode->data.'<br>';
            $currentNode = $currentNode->next;
        }
    }

}