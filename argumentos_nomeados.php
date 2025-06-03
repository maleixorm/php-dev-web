<?php

function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = "") {
    echo "Destinatários: $destinatarios <br>";
    echo "CC: $cc <br>";
    echo "Assunto: $assunto <br>";
    echo "Mensagem: $mensagem <br>";
}

sendEmail(
    "contato@dominio.com",
    "seuemail@teste.com",
    "Argumentos Nomeados",
    "Isso é apenas um teste da feature de argumentos nomeados no PHP8."
);

echo '<hr>';

sendEmail(
    destinatarios: "contato@dominio.com",
    assunto: "Argumentos Nomeados",
    mensagem:"Isso é apenas um teste da feature de argumentos nomeados no PHP8."
);