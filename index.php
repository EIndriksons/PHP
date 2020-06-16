<?php

$names = ['Jeff', 'John', 'Mary'];

// loop over array
foreach ($names as $name) {
    echo $name;
}

// basically 'import' the actual template page
require 'index.view.php';