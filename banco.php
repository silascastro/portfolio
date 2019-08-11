<?php
    include "config.php";

    $conexao = mysqli_connect(SERVER, USER, PASSWORD, DB);

    if(!($conexao)){
        echo 'erro ao conectar com o banco de dados';
        die();
    }

    function postMessage($conexao, $dados){
        $name = $dados['name'];
        $email = $dados['email'];
        $text = $dados['text'];

        $insert_data = "INSERT INTO mensagens(name, email, message) VALUES(
            '$name',
            '$email',
            '$text'
        )";
        mysqli_query($conexao, $insert_data);
    }