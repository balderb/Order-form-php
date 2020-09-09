<?php

$x = 5;

function something() {
    $y = 10;
    echo $GLOBALS['x'];
}

something()