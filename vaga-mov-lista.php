<?php
require_once "include/classes.php";
$lista_movimentacoes = new Movimentacoes();
$lista = $lista_movimentacoes->movimentacoes_listar();
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
    <link rel="stylesheet" href="include/vagas.css">
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
                <div class="row">
                    <div class="col-3">
                        <img src="img/carRunnig.gif" alt="" width="150hv">
                    </div>
                    <div class="col-3">
                        <img src="img/carRunnig.gif" alt="" width="150hv">
                    </div>
                    <div class="col-3">
                        <img src="img/carRunnig.gif" alt="" width="150hv">
                    </div>
                    <div class="col-3">
                        <img src="img/carRunnig.gif" alt="" width="150hv">
                    </div>
                </div>

                <h3>Listar Vagas</h3>

                <table data-toggle="table">
                    <thead>
                        <tr>
                            <th class="text-center" data-field="mov_id">Ticket</th>
                            <th class="text-center" data-field="mov_placa">Placa</th>
                            <th class="text-center" data-field="mov_data_entrada">Data Entrada</th>
                            <th class="text-center" data-field="mov_hora_entrada">Hora Entrada</th>
                            <th class="text-center" data-field="mov_data_saida">Data Saída</th>
                            <th class="text-center" data-field="mov_hora_saída">Hora Saída</th>
                            <th class="text-center" data-field="mov_status">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lista as $linha) : ?>
                            <tr>
                                <td class="text-center"><?php echo $linha['mov_id'] ?></td>
                                <td><?php echo $linha['mov_placa'] ?></td>
                                <td><?php echo date_format(date_create($linha['mov_data_entrada']), 'd/m/Y'); ?></td>
                                <td><?php echo $linha['mov_hora_entrada'] ?></td>
                                <td><?php echo date_format(date_create($linha['mov_data_saida']), 'd/m/Y'); ?></td>
                                <td><?php echo $linha['mov_hora_saida'] ?></td>
                                <td><?php echo $linha['mov_status'] ? 'Ticket em andamento' : 'Ticket finalizado'; ?></td>
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

                <!-- <div class="mb-3 mt-3">
                    <a href="vaga-cadastro.php">
                        <button type="submit" class="btn text-uppercase fw-bold" style="background-color: #7BB062; color: white;">Cadastro de Vagas</button></a>
                </div> -->
                <div class="row position-relative">
                    <div class="col-md-6">
                        <a class="btn ms-3 mt-2 position-absolute top-0 start-0 btnVoltar text-uppercase fw-bold" href="home.php">Voltar</a>
                    </div>
                    <div class="col-md-6">
                        <a href="vaga-cadastro.php">
                            <button type="submit" class="btn position-absolute top-0 end-0 me-3 mt-2 text-uppercase fw-bold" style="background-color: #7BB062; color: white;">Cadastro de Vagas</button>
                        </a>
                    </div>
                </div>

                <footer class="mt-5">
                    <?php
                    require_once('include/footer.php');
                    ?>
                    <script src="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.js"></script>
                </footer>
        </main>
</body>

</html>