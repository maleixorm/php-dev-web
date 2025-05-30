<?php

require "./library/lib1/lib1.php";
require "./library/lib2/lib2.php";

use B\Cliente;

$c = new Cliente('John');
print_r($c);
echo $c->__get('nome');