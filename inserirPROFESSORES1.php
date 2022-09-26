<?php
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$disciplina = $_POST['disciplina'];
require("conexao.php");
$res = $pdo->prepare("INSERT INTO PROFESSORES( NOME, SOBRENOME, DISCIPLINA) VALUES ( :nome, :sobrenome, :disciplina)");
$res->bindparam(":nome", $nome);
$res->bindparam(":sobrenome", $sobrenome);
$res->bindparam(":disciplina", $disciplina);
$res->execute();

?>
