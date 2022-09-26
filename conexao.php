<?php
//----------------CONEXAO---------------------
try {
    $pdo = new PDO("mysql:dbname=FEEDBACK;host=localhost", "root", "");
} catch (PDOException $e) {
    echo "erro com banco de dados".$e->getMessage();
}
catch(Exception $e){
    echo "erro generico:".$e->getMessage();
}



?>