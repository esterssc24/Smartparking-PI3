<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        #estacionamento {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            /* Define 4 colunas */
            grid-gap: 10px;
            /* Espaçamento entre as vagas */
            max-width: 600px;
            /* Largura máxima do estacionamento */
            margin: 0 auto;
            /* Centralizar o estacionamento */
        }

        .vaga {
            background-color: lightgreen;
            /* Cor de fundo da vaga disponível */
            border: 1px solid green;
            /* Borda da vaga disponível */
            height: 0;
            padding-bottom: calc(100% - 12px);
            /* Proporção do quadrado */
            text-align: center;
            line-height: 18px;
            font-size: 12px;
            cursor: pointer;
        }

        .vaga.ocupada {
            background-color: red;
            /* Cor de fundo da vaga ocupada */
            border: 1px solid darkred;
            /* Borda da vaga ocupada */
        }

        .vaga.pausada {
            background-color: yellow;
            /* Cor de fundo da vaga pausada */
            border: 1px solid darkgoldenrod;
            /* Borda da vaga pausada */
        }

        .vaga i.fa {
            color: white;
            font-size: 18px;
            margin-bottom: 5px;
        }
    </style>
    <script>
        window.onload = function() {
            var vagas = document.getElementsByClassName("vaga");

            for (var i = 0; i < vagas.length; i++) {
                vagas[i].onclick = function() {
                    if (this.classList.contains("disponivel")) {
                        this.classList.remove("disponivel");
                        this.classList.add("ocupada");
                    } else if (this.classList.contains("ocupada")) {
                        this.classList.remove("ocupada");
                        this.classList.add("pausada");
                    } else if (this.classList.contains("pausada")) {
                        this.classList.remove("pausada");
                        this.classList.add("disponivel");
                    }
                };
            }

            var cadastrarBtn = document.querySelector('button[type="button"]');
            cadastrarBtn.addEventListener('click', function() {
                var modeloVeiculo = document.getElementById('modVeiculo').value;
                var placaVeiculo = document.getElementById('placa').value;
                var categoriaVeiculo = document.getElementById('categoria').value;
                var marcaVeiculo = document.getElementById('marca').value;
                var vagaSelecionada = document.getElementById('vaga').value;
                var vagaElement = document.querySelector('.vaga:nth-child(' + vagaSelecionada + ')');

                if (vagaElement.classList.contains("ocupada")) {
                    alert("A vaga selecionada já está ocupada.");
                } else if (vagaElement.classList.contains("pausada")) {
                    alert("A vaga selecionada está pausada.");
                } else {
                    vagaElement.classList.remove("disponivel");
                    vagaElement.classList.add("ocupada");
                    alert("Veículo cadastrado com sucesso na posição " + vagaElement.textContent + ".");
                }

                // You can use the values of the variables to perform additional actions or send the data to the server.
            });
        };
    </script>
</head>

<body>
    <div class="container-fluid">
        <?php require_once('include/header.php'); ?>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div id="estacionamento">
                        <?php
                        class Estacionamento
                        {
                            private $num_vagas;
                            private $vagas;

                            public function __construct($num_vagas)
                            {
                                $this->num_vagas = $num_vagas;
                                $this->vagas = array_fill(0, $num_vagas, false); // Array de vagas, todas inicialmente disponíveis
                            }

                            public function verificar_vaga($numero_vaga)
                            {
                                if ($numero_vaga < 0 || $numero_vaga >= $this->num_vagas) {
                                    echo "Vaga inválida!";
                                } elseif ($this->vagas[$numero_vaga]) {
                                    echo "A vaga $numero_vaga está ocupada.";
                                } else {
                                    echo "A vaga $numero_vaga está disponível.";
                                }
                            }

                            public function ocupar_vaga($numero_vaga)
                            {
                                if ($numero_vaga < 0 || $numero_vaga >= $this->num_vagas) {
                                    echo "Vaga inválida!";
                                } elseif ($this->vagas[$numero_vaga]) {
                                    echo "A vaga $numero_vaga já está ocupada.";
                                } else {
                                    $this->vagas[$numero_vaga] = true;
                                    echo "A vaga $numero_vaga foi ocupada.";
                                }
                            }

                            public function pausar_vaga($numero_vaga)
                            {
                                if ($numero_vaga < 0 || $numero_vaga >= $this->num_vagas) {
                                    echo "Vaga inválida!";
                                } elseif (!$this->vagas[$numero_vaga]) {
                                    echo "A vaga $numero_vaga já está disponível.";
                                } else {
                                    $this->vagas[$numero_vaga] = false;
                                    echo "A vaga $numero_vaga foi pausada.";
                                }
                            }

                            public function exibir_vagas()
                            {
                                $grupos = array_chunk($this->vagas, 8); // Dividir em grupos de 8 vagas
                                $letras = range('A', 'Z'); // Letras para os grupos

                                foreach ($grupos as $grupo_key => $grupo) {
                                    $letra_grupo = $letras[$grupo_key];
                                    foreach ($grupo as $vaga_key => $vaga) {
                                        $numero_vaga = $grupo_key * 8 + $vaga_key + 1;
                                        $status = $vaga ? "ocupada" : "disponivel";
                                        echo "<div class='vaga $status'>Vaga $letra_grupo" . sprintf("%02d", $numero_vaga) . "</div>";
                                    }
                                }
                            }
                        }

                        // Exemplo de uso:
                        $estacionamento = new Estacionamento(24);
                        $estacionamento->exibir_vagas();
                        ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <form class="">
                        <h4 class="text-uppercase fw-bold rounded text-center p-2" style="background-color: #7BB062; color: white; height: 50px">Cadastro de vagas</h4>

                        <div class="mb-3 mt-4">
                            <label for="modVeiculo" class="form-label text-uppercase fw-bold">Modelo do veículo</label>
                            <input type="text" class="form-control" id="modVeiculo" required>
                        </div>
                        <div class="mb-3">
                            <label for="placa" class="form-label text-uppercase fw-bold">Placa do veículo</label>
                            <input type="text" class="form-control" id="placa">
                        </div>
                        <div class="mb-3">
                            <label for="categoria" class="form-label text-uppercase fw-bold">Categoria</label>
                            <select class="form-select" id="categoria">
                                <option selected disabled>Categoria</option>
                                <option value="1">Veículo Pequeno</option>
                                <option value="2">Veículo Grande</option>
                                <option value="3">Outros</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="marca" class="form-label text-uppercase fw-bold">Marca do veículo</label>
                            <input type="text" class="form-control" id="marca">
                        </div>
                        <div class="mb-3">
                            <label for="vaga" class="form-label text-uppercase fw-bold">Vagas</label>
                            <select class="form-select" id="vaga">
                                <option selected disabled>Vaga</option>
                                <option value="1">A1</option>
                                <option value="2">A2</option>
                                <option value="3">A3</option>
                                <option value="4">A4</option>
                                <option value="5">A5</option>
                                <option value="6">A6</option>
                                <option value="7">A7</option>
                                <option value="8">A8</option>
                                <option value="9">B9</option>
                                <option value="10">B10</option>
                                <option value="11">B11</option>
                                <option value="12">B12</option>
                                <option value="13">B13</option>
                                <option value="14">B14</option>
                                <option value="15">B15</option>
                                <option value="16">C16</option>
                                <option value="17">C17</option>
                                <option value="18">C18</option>
                                <option value="19">C19</option>
                                <option value="20">C20</option>
                                <option value="21">C21</option>
                                <option value="22">C22</option>
                                <option value="23">C23</option>
                                <option value="24">C24</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <button type="button" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('include/footer.php'); ?>
</body>

</html>