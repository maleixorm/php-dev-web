<?php

require "./library/lib1/lib1.php";
require "./library/lib2/lib2.php";

use A\Cliente as C1;
use B\Cliente as C2;

$c = new C1('John');
print_r($c);
$cnome = $c->__get('nome');
echo '<br>' . $cnome;

echo '<hr>';

$cl = new C2('James');
print_r($cl);
$clnome = $cl->__get('nome');
echo '<br>' . $clnome;