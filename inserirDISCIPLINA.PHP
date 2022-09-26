<?php
$descricao = $_POST['descricao'];
require("conexao.php");
$res = $pdo->prepare("INSERT INTO DISCIPLINA( descricao) VALUES (:descricao)");
$res->bindparam(":descricao", $descricao);

$res->execute();
?>