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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.css">

    <title>Parking Lot</title>
</head>

<body>
    <div class="w-100 text-center">

        <?php
        require_once('include/header.php')
        ?>

        <h1>Listar Movimentações</h1>

        <!-- Campo de Busca -->
        <div class="mb-3 row">
            <div class="col-md-3 mx-auto">
                <input type="text" id="search-input" class="form-control" placeholder="Digite sua busca">
            </div>
        </div>

        <section class="painel-cadastros-cards text-center">
            <?php foreach ($lista as $linha) : ?>
                <div class="card border border-success" style="width: 280px">

                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <label class="text-uppercase fw-bold">TICKET</label>
                            </div>
                            <span class="text-muted">00<?php echo $linha['mov_id'] ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <label class="text-uppercase fw-bold">Placa</label>
                            </div>
                            <span class="text-muted"><?php echo $linha['mov_placa'] ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <label class="text-uppercase fw-bold">DATA ENTRADA</label>
                            </div>
                            <span class="text-muted"><?php echo date_format(date_create($linha['mov_data_entrada']), 'd/m/Y'); ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <label class="text-uppercase fw-bold">HORA ENTRADA</label>
                            </div>
                            <span class="text-muted"><?php echo $linha['mov_hora_entrada'] ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <label class="text-uppercase fw-bold">DATA SAÍDA</label>
                            </div>
                            <span class="text-muted"><?php echo date_format(date_create($linha['mov_data_saida']), 'd/m/Y'); ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <label class="text-uppercase fw-bold">HORA SAÍDA</label>
                            </div>
                            <span class="text-muted"><?php echo $linha['mov_hora_saida'] ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <label class="text-uppercase fw-bold">STATUS</label>
                            </div>
                            <span class="text-muted"><?php echo $linha['mov_status'] ? 'Ticket em andamento' : 'Ticket finalizado'; ?></span>
                        </li>
                    </ul>

                </div>
            <?php endforeach ?>

        </section>

        <div class="row position-relative mb-3">
            <div class="col-md-12 my-2">
                <a class="btn position-absolute top-0 start-0 btnVoltar text-uppercase fw-bold" style="margin-left: 75px;" href="home.php">Voltar</a>
            </div>
        </div>

        <footer class="mt-5">
            <?php
            require_once('include/footer.php');
            ?>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#search-input').on('input', function() {
                    var searchTerm = $(this).val().toLowerCase();
                    $('.painel-cadastros-cards .card').each(function() {
                        var ticketText = $(this).find('span').text().toLowerCase();
                        if (ticketText.indexOf(searchTerm) === -1) {
                            $(this).hide();
                        } else {
                            $(this).show();
                        }
                    });
                });
            });
        </script>
</body>

</html>