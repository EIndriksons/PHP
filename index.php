<?php

// array
$names = ['Jeff', 'John', 'Mary'];

// add to array
$names[] = 'Edgars';

// associative array (key-value pairs)
$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer'
];

// add to array
$person['name'] = 'Edgars';

// remove from array
unset($person['age']);

// loop over array
foreach ($names as $name) {
    echo $name;
}

// this wont work - php cannot echo array
// echo $person;

// instead use var_dump
// here using <pre></pre> to style the ugly output
echo '<pre>';
var_dump($person);
echo '</pre>';

// another fun trick:
// after die() nothing else is ran (the script exits)
die(var_dump($person));

// basically 'import' the actual template page
require 'index.view.php';