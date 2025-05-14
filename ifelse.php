<?php

function quebraLinha() {
    echo "<br><br>";
}

if (true) {
    echo 'Verdadeiro';
} else {
    echo 'Falso';
}

quebraLinha();

if (2 === 2) {
    echo 'Verdadeiro';
} else {
    echo 'Falso';
}

quebraLinha();

if (2 !== 2) {
    echo 'Verdadeiro';
} else {
    echo 'Falso';
}

quebraLinha();

if (2 <= 2) {
    echo 'Verdadeiro';
} else {
    echo 'Falso';
}

quebraLinha();

if (5 == 3 && 10 < 3) {
    echo 'Verdadeiro';
} else {
    echo 'Falso';
}

quebraLinha();

if (3 == 3 || 10 < 3) {
    echo 'Verdadeiro';
} else {
    echo 'Falso';
}