<?php
require_once "include/classes.php";
$lista_vaga = new Vaga();
$lista = $lista_vaga->vaga_listar();
//print_r($lista);
//die();
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <link href="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.css" rel="stylesheet">




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.css">

    <title>Parking Lot</title>
</head>

<body>
    <div class="w-100">

        <?php
        require_once('include/header.php')
        ?>


        <main>
            <div class="container-fluid text-center ">
                <div class="row main">
                    <div class="col-4 align-self-center">
                        <!-- <h1 class="text-uppercase">Smart Parking</h1>
                        <p class="fw-bold">Encontre sua vaga de maneira mais facil e eficiente</p> -->
                        <img src="img/logo.png" alt="">
                    </div>
                    <div class="col-8 ">
                        <img src="img/estac_merMunicipal.jpg" alt="" width="100%">
                    </div>
                </div>
            </div>

            <h3 class="ms-3">Listar Vagas</h3>

            <table data-toggle="table" class="ms-3">
                <thead>
                    <tr>
                        <th class="text-center" data-field="id">Código Vaga</th>
                        <th class="text-center" data-field="vaga_letra">Índice Letra</th>
                        <th class="text-center" data-field="vaga_num">Índice Número</th>
                        <th class="text-center" data-field="vaga_geo_lat">Latitude</th>
                        <th class="text-center" data-field="vaga_geo_lgn">Longitude</th>
                        <th class="text-center" data-field="vaga_status">Status</th>
                        <th class="text-center" data-field="vaga_id">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lista as $linha) : ?>
                        <tr>
                            <td class="text-center"><?php echo $linha['vaga_id'] ?></td>
                            <td><?php echo $linha['vaga_letra'] ?></td>
                            <td><?php echo $linha['vaga_num'] ?></td>
                            <td><?php echo $linha['vaga_geo_lat'] ?></td>
                            <td><?php echo $linha['vaga_geo_lgn'] ?></td>
                            <td><?php echo $linha['vaga_status'] ? 'Pausada' : 'Em funcionamento'; ?></td>
                            <td class="text-center">

                                <a href="vaga-atualiza-status.php?vaga_id=<?= $linha['vaga_id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                    </svg></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <!-- <table border="1">
                <tr>
                    <th> Código Vaga</th>
                    <th> Índice Letra</th>
                    <th> Índice Número</th>
                    <th> Latitude</th>
                    <th> Longitude</th>
                    <th> Status</th>
                    <th> Ação</th>
                </tr>

            </table> -->

            <div class="mb-3 mt-3">
                <a href="vaga-cadastro.php">
                    <button type="submit" class="btn text-uppercase fw-bold" style="background-color: #7BB062; color: white;">Cadastro de Vagas</button></a>
            </div>

            <footer>
                <?php
                require_once('include/footer.php');
                ?>
                <script src="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.js"></script>
            </footer>
        </main>
</body>

</html>