<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo_icon.ico" type="image/x-ico">
    <title>Library</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style/style.css">
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg shadow-sm p-1 bg-body" style="background-color: #fff">
        <div class="container-fluid">
          <a class="navbar-brand nav-link" href="index.php"><img alt="Logo" src="img/logo_icon.ico"> Library</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
              if ((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))) {
                echo '<li class="nav-item me-5">';
                echo '<a class="nav-link" aria-current="page" href="#vantagens">Vantagens</a>';
                echo '</li>';
                  }
              ?>
               <?php
                if ((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))) {
                  echo '<li class="nav-item me-5">';
                  echo '<a class="nav-link" href="#">Dúvidas</a>';
                  echo'</li>'; 
                  }
              ?>
               <?php
                  if ((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))) {
                    echo '<li class="nav-item me-5">';
                    echo'<a class="nav-link" href="#rodape" tabindex="-1" aria-disabled="true">Contato</a>';
                    echo'</li>';
                  }
                ?>
            </ul>
            <div class="d-flex">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 
                 <?php
                  if ((isset($_SESSION['id'])) AND (isset($_SESSION['nome']))) {
                    echo "<li class='nav-item'><a href='#'><button class='btn btn-outline-light me-3 nav-option' type='submit' value='Opcoes'>Opções</button></a></li>"; 
                    echo "<li class='nav-item'><a href='sair.php'><button class='btn btn-outline-light me-3 nav-option' type='submit' value='Sair'>Sair</button></a></li>";
                      } else {
                        echo "<li class='nav-item'><a href='login.php'><button class='btn btn-outline-light me-3 nav-option' type='submit' value='Entrar'>Entrar</button></a></li>"; 
                        echo "<li class='nav-item'><a href='registrar.php'><button class='btn btn-outline-light me-3 nav-option' type='submit' value='Registrar'>Registrar</button></a></li>"; 
                      };
                  ?>
                    <!-- <li class="nav-item"><button class="btn btn-outline-light me-3 nav-option" type="submit" onclick="window.location='login.php';" value="Entrar" id="btnEntrar">Entrar</button></li> -->
                    <!-- <li class="nav-item"><button class="btn btn-outline-light me-3 nav-option" type="submit" id="btnCadastrar">Cadastrar</button></li> -->

              </ul>
            </div>
          </div>
        </div>
    </nav>


</body>
</html>