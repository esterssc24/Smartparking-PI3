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

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8 order-md-1">
                <form class="" method="POST" action="include/f_vaga-entrada.php">

                    <h4 class="text-uppercase fw-bold rounded text-center p-2" style="background-color: #7BB062; color: white; height: 50px">Cadastro de Movimentações</h4>

                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-3">
                            <label for="mov_data_entrada" class="form-label text-uppercase fw-bold">Data Entrada:</label>
                            <input type="date" class="form-control" id="mov_data_entrada" name="mov_data_entrada" placeholder="" value="<?php echo date("Y-m-d");?>" required>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-3">
                            <label for="mov_hora_entrada" class="form-label text-uppercase fw-bold">Hora Entrada:</label>
                            <input type="time" class="form-control" id="mov_hora_entrada" name="mov_hora_entrada" placeholder="" step="2" value="<?php echo date("H:i:s");?>" required>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-3">
                            <label for="mov_placa" class="form-label text-uppercase fw-bold">Placa:</label>
                            <input type="text" class="form-control" id="mov_placa" name="mov_placa" placeholder="" value="" required>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-2 mb-3">
                            <button type="submit" class="btn text-uppercase fw-bold" style="background-color: #7BB062; color: white;"><a style="text-decoration: none; color:white; " href="vaga-lista-mov-ativo.php">Voltar</a></button>
                        </div>
                        <div class="col-md-4 mb-3">
                            <button type="submit" class="btn text-uppercase fw-bold" style="background-color: #7BB062; color: white; margin-left: 100px">Cadastrar</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
    <?php
    require_once('include/footer.php');
    ?>

</body>

</html>