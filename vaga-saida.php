<?php
// Inclui o arquivo que contém a definição da classe Turma
require_once "include/classes.php";

// Obtém o valor do parâmetro "id" passado na URL via método GET
$mov_id = $_GET['mov_id'];

// Cria um novo objeto da classe Turma passando o valor de $id como parâmetro
$mov = new Movimentacoes($mov_id);

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
    <?php
    require_once('include/header.php');
    ?>

    <div class="w-100">
        <div class="row justify-content-center">
            <div class="col-md-8 order-md-1">
                <form class="" method="POST" action="include/f_vaga-saida.php">

                    <h4 class="text-uppercase fw-bold rounded text-center p-2" style="background-color: #7BB062; color: white; height: 50px">Finalizar Ticket</h4>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="mov_id" class="form-label text-uppercase fw-bold">Ticket:</label>
                            <input type="text" class="form-control" id="mov_id" name="mov_id" value="<?= $mov->mov_id ?>" readonly>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="mov_data_entrada" class="form-label text-uppercase fw-bold">Data Entrada:</label>
                            <input type="date" class="form-control" id="mov_data_entrada" name="mov_data_entrada" value="<?= $mov->mov_data_entrada ?>" readonly>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="mov_hora_entrada" class="form-label text-uppercase fw-bold">Hora Entrada:</label>
                            <input type="time" class="form-control" id="mov_hora_entrada" name="mov_hora_entrada" step="2" value="<?= $mov->mov_hora_entrada ?>" readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="mov_placa" class="form-label text-uppercase fw-bold">Placa:</label>
                            <input type="text" class="form-control" id="mov_placa" name="mov_placa" value="<?= $mov->mov_placa ?>" readonly>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="mov_data_saida" class="form-label text-uppercase fw-bold">Data Saída:</label>
                            <input type="date" class="form-control" id="mov_data_saida" name="mov_data_saida" value="<?php echo date("Y-m-d"); ?>">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="mov_hora_saida" class="form-label text-uppercase fw-bold">Hora Saída:</label>
                            <div class="input-group">
                                <input type="time" class="form-control" id="mov_hora_saida" name="mov_hora_saida" placeholder="" step="2" value="<?php echo date("H:i:s"); ?>" required>
                                <button class="btn fw-bold text-uppercase" style="background-color: #7BB062; color: white;" type="button" onclick="atualizarHora()">Atualizar</button>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-md-7 mb-3">
                                <button type="submit" class="btn"><a class="btn btnVoltar text-uppercase fw-bold btn btn-outline-success" href="vaga-mov-lista.php">Voltar</a></button>
                            </div>
                            <div class="col-md-5 mb-3">
                                <button type="submit" class="btn text-uppercase fw-bold" style="background-color: #7BB062; color: white; margin-left: 200px"><a style="text-decoration: none; color:white;">Finalizar</a></button>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div>

    <footer>
        <script>
            function atualizarHora() {
                var horaAtual = new Date().toLocaleTimeString([], {
                    hour: '2-digit',
                    minute: '2-digit',
                    second: '2-digit'
                });
                document.getElementById("mov_hora_saida").value = horaAtual;
            }
        </script>
    </footer>
    <?php
    require_once('include/footer.php');
    ?>

</body>

</html>