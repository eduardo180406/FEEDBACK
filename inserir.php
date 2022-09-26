<?php

require ("conexao.php");

//-----------------INSERT----------------------
$res = $pdo->prepare("INSERT INTO TURMA(descricao)values(:d)");
$res->bindValue(":d", "");


$res->execute();

print "Cadastrado com sucesso"
?> 