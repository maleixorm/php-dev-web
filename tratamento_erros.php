<?php

try {
    echo '<h3> *** Try *** </h3>';

    // $sql = 'SELECT * FROM clientes';
    // mysql_query($sql);

    if(!file_exists("require_arquivo_a.php")) {
        throw new Exception("O arquivo em questao deveria estar disponível as ". date('d/m/Y H:i:s') ." mas não estava. Vamos seguir mesmo assim!");   
    }
    
} catch (Error $err) {
    echo '<h3> *** Catch Error *** </h3>';
    echo '<p style="color: red">' . $err . '</p>';
    
} catch (Exception $e) {
    echo '<h3> *** Catch Exception *** </h3>';
    echo '<p style="color: orange">' . $e . '</p>';
    
} finally {
    echo '<h3> *** Finally *** </h3>'; // O Finally é uma opção opcional
}