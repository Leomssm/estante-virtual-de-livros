<?php
    session_start();
    ob_start();
    include_once 'conexao.php';

    if ((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))) {
        $_SESSION['msg'] = "Necessário fazer o login para acessar";
        header("Location: login.php");
    }
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
    <?php include('cabecalho.php'); ?>
    <div class="container-fluid">  
      <div class="row py-5">
        <div class="col-lg-1">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cadLivroModal2">
          +
          </button>
        </div>
            
        <div class="col-lg-7">
          <div class="jumbotron">
            <h1 class="display-5">Seja Bem-vindo, <?php echo ucfirst($_SESSION['nome']);?>.</h1>
            <p class="lead">Está será sua página customizável.</p>
            <hr class="my-4">
            <p></p>
          </div>




          <div class="container text-center my-3">
    <h2 class="lead">Sua Biblioteca Atual</h2>
    <div class="row mx-auto my-auto justify-content-center">
        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="https://livrariacultura.vteximg.com.br/arquivos/ids/15755375-1000-1000/46490560.jpg?v=637110218322770000" class="img-fluid">
                            </div>
                            <div class="card-img-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/51t55KcM8pL._SY344_BO1,204,203,200_QL70_ML2_.jpg" class="img-fluid">
                            </div>
                            <div class="card-img-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/51t55KcM8pL._SY344_BO1,204,203,200_QL70_ML2_.jpg" class="img-fluid">
                            </div>
                            <div class="card-img-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="https://cdn.shopify.com/s/files/1/0498/4081/6279/products/Untitleddesign_89_d091e0fe-6a11-4aee-97b8-d44efa7c5d83_500x.png?v=163050650710218322770000" class="img-fluid">
                            </div>
                            <div class="card-img-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="https://pbs.twimg.com/media/FNMsWeYXoAEkz9m?format=jpg&name=360x360" class="img-fluid">
                            </div>
                            <div class="card-img-overlay"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-img">
                                <img src="//via.placeholder.com/500x400/fc0?text=6" class="img-fluid">
                            </div>
                            <div class="card-img-overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <h5 class="mt-2 fw-light">Utilize o botão de + para cadastrar novos livros.</h5>
</div>


        </div>
        <div class="col-lg-4">
          <div class="row container">
            <div class="col-lg-12">
            <p class="lead">Últimos livros cadastrados</p>
              <span class="listar-usuarios"></span>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="modal fade" id="cadLivroModal2" tabindex="-1"  data-bs-backdrop="static" aria-labelledby="cadLivroModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cadLivroLabel">Cadastrar Livro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="cad-livro-form" action="cadastrar.php" method="POST" enctype="multipart/form-data">
            <span id="msgAlertErroCad"></span>
            <span id="msgAlertSuccessCad"></span>
            <div class="mb-3">
                <label for="cadlivro" class="col-form-label">Nome</label>
                <input type="text" name="cadlivro" class="form-control" id="cadlivro" placeholder="Digite o nome do Livro">
            </div>
            <div class="mb-3">
                <label for="cadgenero" class="col-form-label">Gênero</label>
                <input type="text" name="cadgenero" class="form-control" id="cadgenero" placeholder="Digite o Gênero">
            </div>
            <div class="mb-3">
                <label for="cadpaginas" class="col-form-label">Páginas</label>
                <input type="text" name="cadpaginas" class="form-control" id="cadpaginas" placeholder="Digite a quantidade de Páginas">
            </div>
            <div class="mb-3">
                <label for="imagem">Imagem:</label>
                <input type="file" name="imagem"/>
            </div>
            <div class="mb-3">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-primary" id="cad-livro-btn" value="Cadastrar">Cadastrar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>