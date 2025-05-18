<?php

function quebrarLinha() {
    echo '<br>';
}

function separarLinha() {
    echo '<hr>';
}

echo date('d/m/Y  H:i');
separarLinha();
echo date_default_timezone_get();
separarLinha();
date_default_timezone_set('America/Los_Angeles');
echo date_default_timezone_get();
separarLinha();
echo date('d/m/Y - H:i');