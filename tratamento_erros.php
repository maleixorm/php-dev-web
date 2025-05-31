<?php

try {
    echo '<h3> *** Try *** </h3>';

    $sql = 'SELECT * FROM clientes';
    mysql_query($sql);
    
} catch (Error $err) {
    echo '<h3> *** Catch *** </h3>';
    echo '<p style="color: red">' . $err . '</p>';
} finally {
    echo '<h3> *** Finally *** </h3>';
}