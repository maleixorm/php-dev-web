<?php

$mega = [];
for ($i=0; $i < 6; $i++) { 
    $num = rand(1, 60);
    if (in_array($num, $mega)) {
        $num = rand(1, 60);
    }
    array_push($mega, $num);
}
echo '<pre>';
print_r($mega);
echo '</pre>';