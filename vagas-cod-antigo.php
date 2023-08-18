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
  <div class="container">
    <?php
    require_once('include/header.php');
    ?>

    <div class="container text-center mt-5">
      <div class="row">
        <div class="col">
          <div class="main">
          </div>
          <div class="legend">
            <button class="primary button" data-text="Add Car">Adicionar Carro</button>
            <button class="secondary button" data-text="Add Car Randomly">Adicionar aleatóriamente</button>
          </div>
        </div>

        <div class="col">
          <form class="">

            <h4 class="text-uppercase fw-bold rounded text-center p-2" style="background-color: #7BB062; color: white; height: 50px">Cadastro de vagas</h4>

            <div class="mb-3 mt-4">
              <label for="" class="form-label text-uppercase fw-bold">Modelo do veículo</label>
              <input type="text" class="form-control" id="modVeiculo" require>
            </div>
            <div class="mb-3">
              <label for="" class="form-label text-uppercase fw-bold">Placa do veiculo</label>
              <input type="text" class="form-control" id="placa">
            </div>
            <div class="mb-3">
              <label for="" class="form-label text-uppercase fw-bold">Categoria</label>
              <select class="form-select">
                <option selected disabled>Categoria</option>
                <option value="1">Veiculo Pequeno</option>
                <option value="2">Veiculo Grande</option>
                <option value="3">Outros</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="" class="form-label text-uppercase fw-bold">Marca do veiculo</label>
              <input type="text" class="form-control" id="marca">
            </div>
            <div class="mb-3">
              <label for="" class="form-label text-uppercase fw-bold">Vagas</label>
              <select class="form-select">
                <option selected disabled>Vaga</option>
                <option value="1">A1</option>
                <option value="2">A2</option>
                <option value="3">A3</option>
                <option value="4">A4</option>
                <option value="5">A5</option>
                <option value="6">B1</option>
                <option value="7">B2</option>
                <option value="8">B3</option>
                <option value="9">B4</option>
                <option value="10">B5</option>
                <option value="11">C1</option>
                <option value="12">C2</option>
                <option value="13">C3</option>
                <option value="14">C4</option>
                <option value="15">C5</option>
                <option value="16">D1</option>
                <option value="17">D2</option>
                <option value="18">D3</option>
                <option value="19">D4</option>
                <option value="20">D5</option>
              </select>
            </div>

            <div class="mb-3">
              <button type="button" class="btn text-uppercase fw-bold" style="background-color: #7BB062; color: white;">Cadastrar</button>
            </div>

          </form>
        </div>
      </div>
    </div>
    <?php
    require_once('include/footer.php');
    ?>
  </div>

</body>

</html>