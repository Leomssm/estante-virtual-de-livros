<?php
    session_start();
    ob_start();
    include_once 'conexao.php';
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
<?php //echo password_hash(12345, PASSWORD_DEFAULT) ?>    
<?php $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
       if(!empty($dados['SendLogin'])) {
            $query_usuario = "SELECT id, nome, email, usuario, senha_usuario FROM usuarios WHERE email =:email LIMIT 1";
            $result_usuario = $conn->prepare($query_usuario);
            $result_usuario->bindParam(':email', $dados['usuario'], PDO::PARAM_STR);
            $result_usuario->execute();

            if (($result_usuario) AND ($result_usuario->rowCount() != 0)) {
                $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
                if (password_verify($dados['senha_usuario'],  $row_usuario['senha_usuario'])) {
                    $_SESSION['id'] = $row_usuario['id'];
                    $_SESSION['nome'] = $row_usuario['nome'];
                    header("Location: dashboard.php");
                } else {
                    $_SESSION['msg'] = '<div id="alert" class="text-center alert alert-danger alert-dismissible fade show" role="alert">Usuário e/ou Senha Incorretos</div>';  
                }
            } else {
                $_SESSION['msg'] = '<div id="alert" class="text-center alert alert-danger alert-dismissible fade show" role="alert">Usuário e/ou Senha Incorretos</div>'; 
            }

        }

            
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }    
?>
<?php include('cabecalho.php'); ?>
<div class="bg-light">
    <div class="jumbotron py-5 container">
        <h1 class="display-4 text-center">Faça o seu Login!</h1>
        <p class="lead text-center">Acesse sua biblioteca virtual customizavel de qualquer lugar.</p>
        <hr class="my-1">
    </div>


    <div class="container shadow p-3 mb-5 bg-body rounded">
    <form method="POST" action="">
        <div class="col"> 
            <div class="row m-5">   
                <label class="mb-2">Usuário</label>
                <input type="text" name="usuario" placeholder="Digite o usuário" class="form-control">
            </div> 
            <div class="row m-5">    
                <label class="mb-2">Senha</label>
                <input type="password" name="senha_usuario" placeholder="Digite a senha" class="form-control">
            </div> 
            <div class="row m-5">
                <input type="submit" value="Acessar" name="SendLogin" class="btn btn-primary">
            </div>
            <div class="row text-center">
                <a class="px-4 me-sm-3" href="registrar.php">Não possui cadastro?</a>
            </div>
        </div>
    </form>
    </div>
</div>

<?php include('footer.php')?>
<script type="text/javascript" src="js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>