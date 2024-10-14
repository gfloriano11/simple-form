<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/teste.css">
    <link rel="stylesheet" href="../../style/read.css">
    <title>Ver Usuário</title>
</head>

<body>
    <div id="central">
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
                    include("../database/db.php");

                    $id = $_GET["id"];

                    $query = "SELECT * FROM usuario WHERE id=$id";
                    $resultado = $conn->query($query);

                    if ($row = $resultado->num_rows > 0) { ?>
                        <table id="tabela_usuario">
                            <tr>
                                <th>Email:</th>
                                <th>Telefone:</th>
                                <th>Problema:</th>
                            </tr>
                            <?php while ($row = $resultado->fetch_assoc()) { ?>
                                <tr>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['numero']; ?></td>
                                    <td><?php echo $row['problema']; ?></td>
                                </tr>
                            <?php }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>