<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/global.css">
    <link rel="stylesheet" href="../../style/read.css">
    <title>Pedidos</title>
</head>
<body>
    <div id="centralizar">
        <div id="centralizada"> 
            <div id="textos">
                <div id="div_texto_principal">
                    <div id="tamanho_texto_principal">
                        <p id="texto_principal">Olá, Administrador. Esses são os Pedidos Pendentes:</p>
                    </div> 
                </div>
                <!-- PHP aberto dentro da div "textos", centralizada no design -->
                <?php

                    include '../database/db.php';

                    $query = "SELECT * FROM usuario";

                    $resultado = $conn -> query($query);

                    if($row = $resultado -> num_rows > 0){ // se a linha tem algum resultado ?>
                        <table id="tabela_usuario">
                            <tr>
                                <th>Nome Completo:</th>
                                <th>Email:</th>
                                <th>Número:</th>
                                <th>Ações</th>
                            </tr>
                <?php   while($row = $resultado -> fetch_assoc()){ ?>
                        <tr>
                            <td><?php echo $row['nome'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['numero'];?></td>
                        </tr>
                <?php   }
                    } else {
                        echo 'Não há Problemas Pendentes';
                    }
                    $conn -> close();

                    ?>
            </div>
        </div>
    </div>
</body>
</html>