<?php
require("conexao.php");
$resultado = $pdo->query("SELECT matriula, nome, sobrenome, turma FROM ALUNO");
?>
<table BORDER="1">
    <tr>
        <td>MATRICULA</td>
        <td>NOME</td>
        <td>SOBRENOME</td>
        <td>TURMA</td>
        <td>EDITAR</td>
        <td>EXCLUIR</td>
    </tr>

<?php 
while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
        <td><?php echo "{$linha['matriula']}";?> </td>
        <td><?php echo "{$linha['nome']}";?> </td>
        <td><?php echo "{$linha['sobrenome']}";?> </td>
        <td><?php echo "{$linha['turma']}";?> </td>
        <td></td>
        <td></td>
    </tr>
  <?php  
}
?>
</table>
<?php

?>