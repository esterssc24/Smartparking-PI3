<?php
require_once "include/classes.php";

$perfil_id = $_GET['perfil_id'];

// Cria um novo objeto da classe Turma passando o valor de $id como parâmetro
$perfil = new Perfil($perfil_id);

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
    <script>
        function limpa_formulário_cep() {
            document.getElementById('perfil_logradouro').value = ("");
            document.getElementById('perfil_bairro').value = ("");
            document.getElementById('perfil_complemento').value = ("");
            document.getElementById('perfil_municipio').value = ("");
            document.getElementById('perfil_estado').value = ("");

        }

        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('perfil_logradouro').value = (conteudo.logradouro);
                document.getElementById('perfil_bairro').value = (conteudo.bairro);
                document.getElementById('perfil_complemento').value = (conteudo.complemento);
                document.getElementById('perfil_municipio').value = (conteudo.localidade);
                document.getElementById('perfil_estado').value = (conteudo.uf);

            } else {
                limpa_formulário_cep();
                alert("CEP não encontrado.");
            }
        }

        function pesquisacep(valor) {
            //Nova variável "cep" somente com dígitos.
            var perfil_cep = valor.replace(/\D/g, '');
            //Verifica se campo cep possui valor informado.
            if (perfil_cep != "") {
                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;
                //Valida o formato do CEP.
                if (validacep.test(perfil_cep)) {
                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('perfil_logradouro').value = "...";
                    //Cria um elemento javascript.
                    var script = document.createElement('script');
                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/' + perfil_cep + '/json/?callback=meu_callback';
                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);
                } else {
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } else {
                limpa_formulário_cep();
            }
        }
    </script>
    <title>Parking Lot</title>
</head>

<body>
    <div class="w-100">
        <?php
        require_once('include/header.php');
        require_once ('include/f_verifica_a.php');
        ?>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8 order-md-1">
                    <form class="" method="POST" action="include/f_perfil-atualiza.php">

                        <h4 class="text-uppercase fw-bold rounded text-center p-2" style="background-color: #7BB062; color: white; height: 50px">Perfil do Usuário</h4>

                        <div class="row">
                            <div class="col-md-2 mb-3">
                                <label for="perfil_id" class="form-label text-uppercase fw-bold">ID</label>
                                <input type="number" class="form-control text-center" id="perfil_id" name="perfil_id" value="<?= $perfil->perfil_id ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="perfil_nome" class="form-label text-uppercase fw-bold">Nome</label>
                                <input type="text" class="form-control" id="perfil_nome" name="perfil_nome" value="<?= $perfil->perfil_nome ?>" readonly>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="perfil_sobrenome" class="form-label text-uppercase fw-bold">Sobrenome</label>
                                <input type="text" class="form-control" id="perfil_sobrenome" name="perfil_sobrenome" value="<?= $perfil->perfil_sobrenome ?>" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="perfil_cpf" class="form-label text-uppercase fw-bold">CPF</label>
                                <input type="number" class="form-control" id="perfil_cpf" name="perfil_cpf" value="<?= $perfil->perfil_cpf ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="perfil_data" class="form-label text-uppercase fw-bold">Data de Nascimento</label>
                                <input type="date" class="form-control" id="perfil_data" name="perfil_data" value="<?= $perfil->perfil_data ?>" readonly>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="perfil_data" class="form-label text-uppercase fw-bold">Telefone</label>
                                <input type="tel" class="form-control" id="perfil_telefone" name="perfil_telefone" onkeyup="handlePhone(event) value=" <?= $perfil->perfil_telefone ?>" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="perfil_cep" class="form-label text-uppercase fw-bold">CEP</label>
                                <input type="number" class="form-control" id="perfil_cep" name="perfil_cep" value="<?= $perfil->perfil_cep ?>" required onblur="pesquisacep(this.value)">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="perfil_logradouro" class="form-label text-uppercase fw-bold">Logradouro</label>
                                <input type="text" class="form-control" id="perfil_logradouro" name="perfil_logradouro" value="<?= $perfil->perfil_logradouro ?>">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="perfil_numero" class="form-label text-uppercase fw-bold">Nº</label>
                                <input type="text" class="form-control" id="perfil_numero" name="perfil_numero" value="<?= $perfil->perfil_numero ?>">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label for="perfil_bairro" class="form-label text-uppercase fw-bold">Bairro</label>
                                <input type="text" class="form-control" id="perfil_bairro" name="perfil_bairro" value="<?= $perfil->perfil_bairro ?>">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="perfil_estado" class="form-label text-uppercase fw-bold">Complemento</label>
                                <input type="text" class="form-control" id="perfil_estado" name="perfil_estado" value="<?= $perfil->perfil_complemento ?>">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="perfil_municipio" class="form-label text-uppercase fw-bold">Cidade</label>
                                <input type="text" class="form-control" id="perfil_municipio" name="perfil_municipio" value="<?= $perfil->perfil_municipio ?>">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="perfil_estado" class="form-label text-uppercase fw-bold">Estado</label>
                                <input type="text" class="form-control" id="perfil_estado" name="perfil_estado" value="<?= $perfil->perfil_estado ?>">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="perfil_perfil" class="form-label text-uppercase fw-bold">Perfil</label>
                                <input type="text" class="form-control" id="perfil_perfil" name="perfil_perfil" value="<?= $perfil->perfil_perfil ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 mb-3">
                                <button type="submit" class="btn"><a class="btn btnVoltar text-uppercase fw-bold btn btn-outline-success" href="perfil-lista.php">Voltar</a></button>
                            </div>
                            <div class="col-md-6 mb-3">
                                <button type="reset" class="btn text-uppercase fw-bold" style="background-color: #7BB062; color: white; margin-left: 35px">Limpar dados</button>
                                <button type="submit" class="btn text-uppercase fw-bold" style="background-color: #7BB062; color: white; margin-left: 40px">Atualizar</button>
                            </div>
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