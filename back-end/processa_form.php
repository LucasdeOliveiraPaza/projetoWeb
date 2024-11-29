<?php
    //print_r($_SERVER);
    $nome = $_REQUEST["nome"];
    $idade = $_REQUEST["idade"];
    $senha = $_REQUEST["senha"];

    echo "<h1>Dados do Usúario</h1><hr>";
    echo "<p>O usuário $nome tem $idade anos.</p>";
    echo '<a href="../index.html"><button>Home Page</button></a>';
    echo '<button type="button" onclick="history.back()">VOLTAR</button>';
    echo '<button onclick="window.location.href=\'https:\\\\www.udesc.br/\'">Udesc</button>';
?>