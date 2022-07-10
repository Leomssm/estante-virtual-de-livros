<?php
include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo_icon.ico" type="image/x-ico">
    <title>Library</title>
</head>
<body>
<?php 
include ('cabecalho.php');
?>
<div class="bg-light">
    <div class="jumbotron py-5 container">
        <h1 class="display-4 text-center">Cadastre-se na AgileBiblio!</h1>
        <p class="lead text-center">Acesse sua biblioteca virtual customizavel de qualquer lugar.</p>
        <hr class="my-1">
    </div>


    <div class="container shadow p-3 mb-5 bg-body rounded" id="cadUsuario">
        <form id="cad-usuario-form">
            <span id="msgAlertErroCad"></span>
            <span id="msgAlertSuccessCad"></span>
            <br>
            <div class="mb-3">
                <label for="fInput" class="col-sm-2 m-2">Primeiro Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o seu primeiro nome"> 
            </div>
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="" class="col-sm-2 m-2">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@exemplo.com">
                    
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="" class="col-sm-2 m-2">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
                </div>    
            </div>
        </div>
            <div class="mb-3">
                <label for="Select" class="col-sm-2 m-2">Selecione o País</label>
                <select class="form-select form-control form-control-lg" id="CadSelect">
                    <option selected value="BR">Brasil</option>
                    <option value="US">Estados Unidos</option>
                    <option value="ND">Outro</option>
                </select>
            </div>
            <div class="d-grid gap-2 mb-5">
                <button class="btn btn-primary" id="cad-usuario-btn" type="submit">Cadastrar-se</button>
            </div>
        </form>
    </div>
</div>



<?php 
include ('footer.php');
?>
<script type="text/javascript" src="js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>