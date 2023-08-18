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
        <div class="container-index">
            <div class="login-page">
                <div class="form-index">
                   <!-- <form class="register-form" >
                        <h4 class="text-uppercase fw-bold">Atualizar senha</h4>
                        <input type="text" id="pwdAtual_registrar" placeholder="Senha atual" />
                        <input type="password" id="pwd_registrar" placeholder="Nova Senha" />
                        <input type="text" id="confr_registrar" placeholder="Confirmar senha" />
                        <p class="message"><a href="#"><button class="btnIndex btn-link rounded link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Atualizar</button></a></p>
                    </form> -->
                    <form class="login-form" method="POST" action="include/f_login.php">
                        <h4 class="text-uppercase fw-bold">Login</h4>
                        <input type="text" id="login_email" name="login_email" placeholder="Usuário" />
                        <input type="password" id="login_senha" name="login_senha" placeholder="Senha" />
                        <p class="message"><a href="#"><button class="btnIndex btn-link rounded link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" type="submit">Login</button></a></p>
                    </form>
                </div>
            </div>

            <footer>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
                <script src="include/function.js"></script>


                <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
                <script src="https://kit.fontawesome.com/b1ae22cfee.js" crossorigin="anonymous"></script>

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                <script src="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.js"></script>
                <script src="https://unpkg.com/bootstrap-table@1.21.2/dist/locale/bootstrap-table-pt-BR.min.js"></script>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
            </footer>
        </div>

        <script>
            $('.message a').click(function() {
                $('form').animate({
                    height: "toggle",
                    opacity: "toggle"
                }, "slow");
            });
        </script>

    </body>

    </html>

</body>

</html>