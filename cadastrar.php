<?php
session_start();
ob_start();
include_once "conexao.php";
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$cadid = $_SESSION['id'];
$imagem = $_FILES["imagem"];
if($imagem != NULL) {
	$nomeFinal = time().'.jpg';
if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
    $tamanhoImg = filesize($nomeFinal);

    $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
    unlink($nomeFinal);
}
}
if (empty($dados['cadlivro'])) {
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo Nome </div>"];
} elseif (empty($dados['cadgenero'])) {
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo Gênero </div>"];
} elseif (empty($dados['cadpaginas'])) {
    $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo Páginas </div>"]; 
} else {
    $query_livro = "INSERT INTO livros (usuario, nome, genero, paginas, imagem) VALUES (:usuario, :nome, :genero, :paginas, :imagem)";
    $cad_livro = $conn->prepare($query_livro);
    $cad_livro->bindParam(':usuario', $cadid);
    $cad_livro->bindParam(':nome', $dados['cadlivro'], PDO::PARAM_STR);
    $cad_livro->bindParam(':genero', $dados['cadgenero'], PDO::PARAM_STR);
    $cad_livro->bindParam(':paginas', $dados['cadpaginas']);
    $cad_livro->bindParam(':imagem', $mysqlImg);
    $cad_livro->execute();
    if ($cad_livro->rowCount()) {
        $retorna = ['erro' => false, 'msg' => "<div class='alert alert-success' role='alert'>Livro cadastrado com sucesso</div>"];
    } else {
        $retorna = ['erro' => false, 'msg' => "<div class='alert alert-danger' role='alert'>Livro não cadastrado</div>"]; 
    };

    
}

echo json_encode($retorna);