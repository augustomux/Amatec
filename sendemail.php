<?php
    // Recolhe os dados do formulário
    $name = $_POST['name'];
    $url = $_POST['url'];
    $plataforma = $_POST['plataforma'];
    $telefone = $_POST['telefone'];
    $descrição = $_POST['descrição'];

    // Monta a mensagem a ser enviada
    $messageToSend = "Nome: " . $name . "\nurl: " . $url . "\nTelefone: " . $Telefone . "\ndescrição: " . $descrição;

    // Envia o e-mail
    mail("augusto.mmux@gmail.com", "Formulário de contato", $messageToSend);
?>
