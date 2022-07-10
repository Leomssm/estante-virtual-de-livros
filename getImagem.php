<?php
 session_start();
 ob_start();
include_once ("conexao.php");

if ((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))) {
    header("Location: index.php");
};

$cadid = $_SESSION['id'];

$query_imagem = "SELECT imagem FROM `livros` as l LEFT JOIN `usuarios` as u on u.id = l.usuario 
WHERE l.usuario = $cadid
order by l.data_cadastro asc";

$result_imagem = $conn->prepare($query_imagem);
$result_imagem->execute();

if(($result_imagem) and ($result_imagem->rowCount() != 0)) {
    echo "<img src=data:image/jpeg;base64," . (base64_encode(($result_imagem['image']))) . " style='width:60px;height:60px;'>";
}

echo json_encode($retorna);

?>

