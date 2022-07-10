<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'lib/vendor/autoload.php';


include_once("conexao.php");

$datas = filter_input_array(INPUT_POST, FILTER_DEFAULT);

 if (empty($datas['nome'])) {
     $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo Nome </div>"];
    } elseif (empty($datas['email'])) {
     $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo Email </div>"];
 } elseif (empty($datas['senha'])) {
     $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Necessário preencher o campo Senha </div>"];
 } else {
    $query_usuario_pes = "SELECT id FROM usuarios WHERE email=:email LIMIT 1";
    $result_usuario = $conn->prepare($query_usuario_pes);
    $result_usuario->bindParam(':email', $datas['email'], PDO::PARAM_STR);
    $result_usuario->execute();

    if (($result_usuario) AND ($result_usuario->rowCount() != 0)) {
        $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: E-mail já está sendo utilizado!</div>"];
    } else {
    $query_usuario = "INSERT INTO usuarios (nome, email, usuario, senha_usuario) VALUES (:nome, :email, :usuario, :senha)";
    $cad_usuario = $conn->prepare($query_usuario);
    $cad_usuario->bindParam(':usuario', $datas['nome'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':nome', $datas['nome'], PDO::PARAM_STR);
    $cad_usuario->bindParam(':email', $datas['email'], PDO::PARAM_STR);
    $senha_cript = password_hash($datas['senha'], PASSWORD_DEFAULT);
    $cad_usuario->bindParam(':senha', $senha_cript, PDO::PARAM_STR);
    $cad_usuario->execute();
    if ($cad_usuario->rowCount()) {
        $retorna = ['erro' => false, 'msg' => "<div class='alert alert-success' role='alert'>Usuário cadastrado com sucesso</div>"];
    } else {
        $retorna = ['erro' => true, 'msg' => "<div class='alert alert-danger' role='alert'>Erro: Usuário não cadastrado</div>"]; 
    };}
}
echo json_encode($retorna);
