<?php

    include "../database/db.php";
                                
    $id = $_GET['id'];

    $resultado = $conn->query("SELECT * FROM usuario WHERE id = '$id'");

    $row = $resultado->fetch_assoc();

    $nome = $row['nome'];

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../frontend/style/global.css">
    <link rel="stylesheet" href="../../frontend/style/read.css">
    <title>Pedidos</title>
</head>
<body>
    <div id="central">
        <div id="centralizar">
            <div id="centralizada">
                <div id="textos">
                    <div id="div_texto_principal">
                        <div id="tamanho_texto_principal">
                            <p id="texto_principal">Problema de <?php echo $nome . ':';?></p>
                        </div>
                    </div>
                    <!-- PHP aberto dentro da div "textos", centralizada no design -->
                    <?php

                    include '../database/db.php';

                    $query = "SELECT * FROM usuario WHERE id = $id";

                    $resultado = $conn->query($query);

                    if ($row = $resultado->num_rows > 0) { // se a linha tem algum resultado ?>
                        <div class="container_tabela">
                            <table id="tabela_usuario">
                                <thead>
                                    <tr>
                                        <th>Problema:</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($row = $resultado->fetch_assoc()) { ?>
                                    <tr>
                                        <td><?php echo $row['problema']; ?></a></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
<?php                 } else {
                        echo 'Não há Problemas Pendentes';
                    }
                    $conn->close();

                    ?>
                    <div id="email">
                        <a id="botao_email" href="mailto:<?php echo $row['email'] ?>">Enviar Email </a>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>