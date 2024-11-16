<?php

    include '../database/db.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $numero = $_POST['numero'];
        $problema = $_POST['problema'];

        $sql = "INSERT INTO usuario (nome, email, numero, problema) VALUES ('$nome', '$email', '$numero', '$problema')";

        if($conn->query($sql) === TRUE){
            echo "Novo registro adicionado com sucesso!";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
        header("Location: ../../frontend/index.html");
        exit();
    }

?>