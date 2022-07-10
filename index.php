<?php
    session_start();
    ob_start();
    include_once 'conexao.php';

    if ((isset($_SESSION['id'])) AND (isset($_SESSION['nome']))) {
        header("Location: dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo_icon.ico" type="image/x-ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>Library</title>
</head>
<body>
<?php include('cabecalho.php'); ?>

<header class="bg-light py-5">
        <div class="container px-5">
              <div class="row gx-5 align-items-center justify-content-center">
                  <div class="col-lg-8 col-xl-7 col-xxl-6">
                      <div class="my-5 text-center text-xl-start">
                           <h1 class="display-5 fw-bolder text-dark mb-2">Utilize já a sua biblioteca virtual para organizar seus livros</h1>
                          <p class="lead fw-normal text-dark-50 mb-4">Sua estante virtual customizavel de livros. Crie, edite e compartilhe em suas redes sociais.</p>
                          <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                              <a class="btn btn-primary btn-lg px-4 me-sm-3" href="registrar.php">Cadastre-se</a>
                              <a class="btn btn-outline-dark btn-lg px-4" href="#vantagens">Saiba Mais</a>
                          </div>
                      </div>
                  </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="img/library-fantasy.jpg" alt="..." /></div>
              </div>
        </div>  
</header>

<div class="vh-100 d-flex justify-content-center align-items-center bg-light">
    <div class="grid-container">
        <div class="espaco">
        </div>
        <div class="grid-x align-center">
            <div class="cell small-12 medium-10 large-8">
                <h1 class="text-center display-1">Crie e compartilhe sua biblioteca particular</h1>
                <p class="lead text-center">Conosco, você pode dividir em categorias como livros, filmes, músicas, jogos entre outras opções</p>
            </div>
        </div>
    </div>
</div>

<section class="py-5 m-5" id="vantagens">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><p class="fw-bolder mb-0 display-3">Vantagens de nos utilizar</p></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2 m-3">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3">  <i class="fa bi-bookmarks"></i></div>
                                    <h2 class="h5">Pesquisa</h2>
                                    <p class="mb-0">Possui enorme quantidade de livros? Não tem problema, possuímos um ótimo sistema de pesquisa.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3">  <i class="bi bi-house"></i></div>
                                    <h2 class="h5">Acesse de qualquer local</h2>
                                    <p class="mb-0">A AgileBiblio te permite acessar de onde quer que você esteja.</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3">  <i class="bi bi-toggles2"></i></div>
                                    <h2 class="h5">Modo público e modo privado</h2>
                                    <p class="mb-0">Quer que somente você possa olhar sua coleção? Quer deixá-la pública? Possuímos ambas configurações.</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-dark bg-gradient text-white rounded-3 mb-3">  <i class="bi bi-currency-dollar"></i></div>
                                    <h2 class="h5">Grátis sem data de expiração</h2>
                                    <p class="mb-0">Sinta-se livre para usufruir deste sistema gratuitamente sem a obrigação de ser Premium.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"Um projeto ambicioso realizado com ajuda de escritores para sanar todo tipo de problema e facilitar a organização de sua coleção!"</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                    <div class="fw-bold">
                                        Leonardo Mossim
                                        <span class="fw-bold text-primary mx-1">/</span>
                                        CEO, BilioAgile
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">From our blog</h2>
                                <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://dummyimage.com/600x350/ced4da/6c757d" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Blog post title</h5></a>
                                    <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">Kelly Rowan</div>
                                                <div class="text-muted">March 12, 2022 &middot; 6 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://dummyimage.com/600x350/adb5bd/495057" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Another blog post title</h5></a>
                                    <p class="card-text mb-0">This text is a bit longer to illustrate the adaptive height of each card. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">Josiah Barclay</div>
                                                <div class="text-muted">March 23, 2022 &middot; 4 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="https://dummyimage.com/600x350/6c757d/343a40" alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">The last blog post title is a little bit longer than the others</h5></a>
                                    <p class="card-text mb-0">Some more quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">Evelyn Martinez</div>
                                                <div class="text-muted">April 2, 2022 &middot; 10 min read</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Call to action-->
                    <aside class="bg-dark bg-gradient rounded-3 p-4 p-sm-5 mt-5">
                        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                            <div class="mb-4 mb-xl-0">
                                <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
                                <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                            </div>
                            <div class="ms-xl-4">
                                <div class="input-group mb-2">
                                    <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                                    <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                                </div>
                                <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                            </div>
                        </div>
                    </aside>
                </div>
            </section>

<section id="rodape">
<?php include ('footer.php') ?>
</section>
<script type="text/javascript" src="js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>