<?php
$matricula = $_POST['matricula'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$turma = $_POST['turma'];
require("conexao.php");
$res = $pdo->prepare("INSERT INTO ALUNO(MATRIULA, NOME, SOBRENOME, TURMA) VALUES (:matriula, :nome, :sobrenome,:turma)");
$res->bindparam(":matriula", $matricula);
$res->bindparam(":nome", $nome);
$res->bindparam(":sobrenome", $sobrenome);
$res->bindparam(":turma", $turma);
$res->execute();

?>
