<?php

//$variable = 'hello';
//$variable = 15;
//$variable = 1.234;
//$variable = [1, 2, 3];
$variable = (object)[1, 2, 3];


if (is_numeric($variable)) {
    var_dump($variable);
} else {
    echo gettype($variable);
}

?>