<?php
require("conexao.php");
$resultado = $pdo->query("SELECT codigo, descricao FROM TURMA");
?>
<table BORDER="1">
    <tr>
        <td>CODIGO</td>
        <td>DESCRICAO</td>
    </tr>

<?php 
while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
        <td><?php echo "{$linha['codigo']}";?> </td>
        <td><?php echo "{$linha['descricao']}";?> </td>
        
    </tr>
  <?php  
}
?>
</table>
<?php

?>