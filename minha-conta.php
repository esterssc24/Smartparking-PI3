<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="include/vagas.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">

  <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.css">

  <title>Minha Conta</title>
</head>

<body>

  <?php
  require_once('include/header.php');
  ?>
  <div class=" w-100">
    <div class="row ms-5 justify-content-center mt-3">
      <div class="col-md-4 text-center">
        <div class='col-md-4'>
          <img src='img/avatar.png' style="width: 100px;" class='foto_pag_perfil'>
          <p>Olá, <?php echo $_SESSION['usuario_logado'] ?></p>
        </div>
      </div>

      <div class="col-md-4" style="margin-top: 50px;">
        <a class="btn btnVoltar text-uppercase fw-bold btn btn-outline-success" href="perfil-atualiza.php">Atualizar Dados</a>
        <img src='img/att_dados.png' style="width: 100px;" class='foto_pag_perfil'>
      </div>

      <div class="col-md-4 " style="margin-top: 50px;">
        <a class="btn btnVoltar text-uppercase fw-bold btn btn-outline-success" href="">Atualizar Senha</a>
        <img src='img/senha.png' style="width: 100px;" class='foto_pag_perfil'>
      </div>

    </div>



    <footer>
      <?php
      require_once('include/footer.php');
      ?>
    </footer>
</body>

</html>