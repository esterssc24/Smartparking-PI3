<?php
require_once "include/classes.php";
$lista_perfil = new Perfil();
$listap = $lista_perfil->perfil_listar();
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
        require_once('include/header.php');
        require_once('include/f_verifica_a.php');
        ?>

        <h1>Listar Perfil</h1>
        <table data-toggle="table">
            <thead style="font-size: 13px;">
                <tr>
                    <th> ID_Perfil</th>
                    <th> Nome</th>
                    <th> Sobrenome</th>
                    <th> CPF</th>
                    <th> Data de Nascimento</th>
                    <th> Telefone</th>
                    <th> CEP</th>
                    <th> Logradouro</th>
                    <th> Nº</th>
                    <th> Bairro</th>
                    <th> Município</th>
                    <th> UF</th>
                    <th> Ação</th>

                </tr>
            </thead>
            <tbody style="font-size: 13px;">
                <?php foreach ($listap as $linhap) : ?>
                    <tr>
                        <td><?php echo $linhap['perfil_id'] ?></td>
                        <td><?php echo $linhap['perfil_nome'] ?></td>
                        <td><?php echo $linhap['perfil_sobrenome'] ?></td>
                        <td><?php echo $linhap['perfil_cpf'] ?></td>
                        <td><?php echo date_format(date_create($linhap['perfil_data']), 'd/m/Y'); ?></td>
                        <td><?php echo $linhap['perfil_telefone'] ?></td>
                        <td><?php echo $linhap['perfil_cep'] ?></td>
                        <td><?php echo $linhap['perfil_logradouro'] ?></td>
                        <td><?php echo $linhap['perfil_numero'] ?></td>
                        <td><?php echo $linhap['perfil_bairro'] ?></td>
                        <td><?php echo $linhap['perfil_municipio'] ?></td>
                        <td><?php echo $linhap['perfil_estado'] ?></td>

                        <td>
                            <a href="perfil-atualiza.php?perfil_id=<?= $linhap['perfil_id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                </svg></a>
                        </td>

                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <!-- <div class="mb-3 mt-3">
            <a href="perfil-cadastro.php">
                <button type="submit" class="btn text-uppercase fw-bold" style="background-color: #7BB062; color: white;">Cadastro Usuário</button></a>
        </div> -->

        <div class="row position-relative">
            <div class="col-md-10">
                <a class="btn ms-3 mt-2 position-absolute top-0 start-0 btnVoltar text-uppercase fw-bold" href="home.php">Voltar</a>
            </div>
            <div class="col-md-2">
                <a href="perfil-cadastro.php">
                    <button type="submit" class="btn text-uppercase fw-bold mt-2" style="background-color: #7BB062; color: white;">Cadastro Usuário</button></a>
                </a>
            </div>
        </div>

        <footer>
            <?php
            require_once('include/footer.php');
            ?>
        </footer>
</body>

</html>