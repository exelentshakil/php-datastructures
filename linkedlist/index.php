<?php

include_once 'LinkedList.php';
include_once 'Node.php';

$fast = 'Fast and Furious';
$second = 'Infinity war!';
$third = 'Iron man 3';

$linkedList = new LinkedList();
$linkedList->add($fast);
$linkedList->add($second);
$linkedList->add($third);

$linkedList->display();