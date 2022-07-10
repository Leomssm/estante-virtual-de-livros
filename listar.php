<?php
 session_start();
 ob_start();
include_once ("conexao.php");

if ((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))) {
    header("Location: index.php");
};

$cadid = $_SESSION['id'];

$query_livros = "SELECT l.nome, l.data_cadastro FROM `livros` as l LEFT JOIN `usuarios` as u on u.id = l.usuario 
WHERE l.usuario = $cadid
order by l.data_cadastro desc LIMIT 4";

$result_livros = $conn->prepare($query_livros);
$result_livros->execute();

if(($result_livros) and ($result_livros->rowCount() != 0)) {
    $dados = "<table class='table'>";
    $dados .= "<thead>";
    $dados .= "<tr>";
    $dados .= "<th>Nome</th>";
    $dados .= "<th>Data de Cadastro</th>";
    $dados .= "</tr>";
    $dados .= "</thead>";
    $dados .= "<tbody>";
    while($row_livros = $result_livros->fetch(PDO::FETCH_ASSOC)) {
        extract($row_livros);
        $dados .= "<tr>";
        $dados .= "<td>$nome</td>";
        $dados .= "<td>$data_cadastro</td>";
        $dados .= "</tr>";
    }
    $dados .= "</tbody>";
    $dados .= "</table>";

    //echo $dados;

    $retorna = ['status' => true, 'dados' => $dados];
} else {
    $dados = "<table class='table'>";
    $dados .= "<thead>";
    $dados .= "<tr>";
    $dados .= "<th>Nome</th>";
    $dados .= "<th>Data de Cadastro</th>";
    $dados .= "</tr>";
    $dados .= "</thead>";
    $dados .= "<tbody>";
    while($row_livros = $result_livros->fetch(PDO::FETCH_ASSOC)) {
        extract($row_livros);
        $dados .= "<tr>";
        $dados .= "<td>$nome</td>";
        $dados .= "<td>$data_cadastro</td>";
        $dados .= "</tr>";
    }
    $dados .= "</tbody>";
    $dados .= "</table>";
    // $retorna = ['status' => false, 'msg' => "<p>Erro</p>"];
}

echo json_encode($retorna);

?>

