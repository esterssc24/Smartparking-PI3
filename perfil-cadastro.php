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

<script src="include/function-header.js"></script>

<body>
    <?php
    require_once('include/header.php');
    require_once ('include/f_verifica_a.php');
    ?>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8 order-md-1">
                <form class="" method="POST" action="include/f_perfil-cadastro.php">

                    <h4 class="text-uppercase fw-bold rounded text-center p-2" style="background-color: #7BB062; color: white; height: 50px">Cadastro de Usuário</h4>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="perfil_nome" class="form-label text-uppercase fw-bold">Nome:</label>
                            <input type="text" class="form-control" id="perfil_nome" name="perfil_nome" placeholder="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir um nome válido.
                            </div>
                        </div>
                        <div class="col-md-8 mb-3">
                            <label for="perfil_sobrenome" class="form-label text-uppercase fw-bold">Sobrenome:</label>
                            <input type="text" class="form-control" id="perfil_sobrenome" name="perfil_sobrenome" placeholder="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir um sobrenome válido.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="perfil_cpf" class="form-label text-uppercase fw-bold">CPF:</label>
                            <input type="text" class="form-control" id="perfil_cpf" name="perfil_cpf" placeholder="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir um cpf válido.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="perfil_data" class="form-label text-uppercase fw-bold">Data de Nascimento:</label>
                            <input type="date" class="form-control" id="perfil_data" name="perfil_data" placeholder="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir uma Data de nascimento válido.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="perfil_telefone" class="form-label text-uppercase fw-bold">Telefone</label>
                            <input type="tel" class="form-control" id="perfil_telefone" name="perfil_telefone" onkeyup="handlePhone(event)" maxlength="15">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="perfil_cep" class="form-label text-uppercase fw-bold">CEP:</label>
                            <input type="text" class="form-control" id="perfil_cep" name="perfil_cep" placeholder="" maxlength="9" required onblur="pesquisacep(this.value)" onkeyup="handleZipCode(event)">
                            <div class="invalid-feedback">
                                É obrigatório inserir um CEP válido.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="perfil_logradouro" class="form-label text-uppercase fw-bold">Logradouro:</label>
                            <input type="text" class="form-control" id="perfil_logradouro" name="perfil_logradouro" placeholder="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir um Logradouro válido.
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="perfil_numero" class="form-label text-uppercase fw-bold">Nº:</label>
                            <input type="number" class="form-control" id="perfil_numero" name="perfil_numero" placeholder="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir um Número válido.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="perfil_bairro" class="form-label text-uppercase fw-bold">Bairro:</label>
                            <input type="text" class="form-control" id="perfil_bairro" name="perfil_bairro" placeholder="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir um Bairro válido.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="perfil_complemento" class="form-label text-uppercase fw-bold">Complemento:</label>
                            <input type="text" class="form-control" id="perfil_complemento" name="perfil_complemento" placeholder="" >
                            <div class="invalid-feedback">
                                É obrigatório inserir um Estado válido.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="perfil_municipio" class="form-label text-uppercase fw-bold">Cidade:</label>
                            <input type="text" class="form-control" id="perfil_municipio" name="perfil_municipio" placeholder="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir uma Cidade válido.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="perfil_estado" class="form-label text-uppercase fw-bold">Estado:</label>
                            <input type="text" class="form-control" id="perfil_estado" name="perfil_estado" placeholder="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir um Estado válido.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2 mb-3">
                            <label for="perfil_perfil" class="form-label text-uppercase fw-bold">Perfil:</label>
                            <input type="text" class="form-control" id="perfil_perfil" name="perfil_perfil" placeholder="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir um Perfil válido.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="perfil_email" class="form-label text-uppercase fw-bold">E-mail:</label>
                            <input type="email" class="form-control" id="perfil_email" name="perfil_email" placeholder="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir um E-mail válido.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="perfil_senha" class="form-label text-uppercase fw-bold">Senha:</label>
                            <input type="password" class="form-control" id="perfil_senha" name="perfil_senha" placeholder="" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir um Senha válido.
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <button type="submit" class="btn"><a class="btn btnVoltar text-uppercase fw-bold btn btn-outline-success" href="perfil-lista.php">Voltar</a></button>
                        </div>
                        <div class="col-md-6 mb-3">
                            <button type="reset" class="btn text-uppercase fw-bold" style="background-color: #7BB062; color: white; margin-left: 50px">Limpar dados</button>
                            <button type="submit" class="btn text-uppercase fw-bold" style="background-color: #7BB062; color: white; margin-left: 25px">Cadastrar</button>
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