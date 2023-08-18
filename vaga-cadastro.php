<?php

require_once "include/classes.php";

$lista_vaga = new Vgstatus();
$lista = $lista_vaga->vgstatus_listar();

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
    <div class="w-100">
        <?php
        require_once('include/header.php');
        ?>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 order-md-1">
                    <form class="" method="POST" action="include/f_vaga-cadastro.php">
                        <h4 class="text-uppercase fw-bold rounded text-center p-2" style="background-color: #7BB062; color: white; height: 50px">Cadastro de vagas</h4>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="vaga_letra" class="form-label text-uppercase fw-bold">Índice Letra:</label>
                                <input type="text" class="form-control" id="vaga_letra" name="vaga_letra" maxlength="1" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    É obrigatório inserir uma válido.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="vaga_num" class="form-label text-uppercase fw-bold">Índice Número</label>
                                <input type="number" class="form-control" id="vaga_num" name="vaga_num" maxlength="2" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    É obrigatório inserir um numero válido.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="vaga_letra" class="form-label text-uppercase fw-bold">Latitude:</label>
                                <input type="number" class="form-control" id="vaga_geo_lat" name="vaga_geo_lat" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    É obrigatório inserir uma válido.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="vaga_num" class="form-label text-uppercase fw-bold">Longitude:</label>
                                <input type="number" class="form-control" id="vaga_geo_lgn" name="vaga_geo_lgn" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    É obrigatório inserir um numero válido.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="vaga_status" class="form-label text-uppercase fw-bold">Status:</label>
                                <select name="vaga_status" id="vaga_status" class="form-control">
                                    <?php
                                    foreach ($lista as $linha) :
                                        echo "<option value='{$linha['vgstatus_id']}'>
                                            {$linha['vgstatus_tipo']}
                                </option>";
                                    endforeach
                                    ?>
                                </select>
                                <div class="invalid-feedback">
                                    É obrigatório inserir um status válido.
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-8 mb-3">
                                <button type="submit" class="btn"><a class="btn btnVoltar text-uppercase fw-bold btn btn-outline-success" href="vaga-mov-lista.php">Voltar</a></button>
                            </div>
                            <div class="col-md-4 mb-3">
                                <button type="submit" class="btn text-uppercase fw-bold" style="background-color: #7BB062; color: white; margin-left: 100px">Cadastrar</button>
                            </div>
                        </div>


                    </form>


                </div>
            </div>
        </div>
    </div>
    <?php
    require_once('include/footer.php');
    ?>
    </div>

</body>

</html>