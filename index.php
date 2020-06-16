<?php

$name = 'Jake';

// if you use ' then you cannot output variable directly
// echo 'Hello, $greetings';

// but if you use " you can do it like this:
echo "Hello, $name";

// another way, but mouch more clearer
echo "Hello, {$name}";

// another way
echo 'Hello, ' . $name;