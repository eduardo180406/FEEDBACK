<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="inserirPROFESSORES.css" rel="stylesheet">
  </head>
</head>
<body>

   <div class="mb-3">
      <h1 >Cadastre o Professor</h1>
        <form action="inserirPROFESSORES1.php" method="post">
        <h5>NOME:</h5> <input type="text" name="nome" id="nome" class="form-control" ><br>
        <h5>SOBRENOME:</h5> <input type="text" name="sobrenome" id="sobrenome" class="form-control" ><br>        
        <h5>DISCIPLINA:</h5>  
        <?php
        require("conexao.php");
         $resultado = $pdo->query("SELECT codigo, descricao FROM DISCIPLINA");
         ?>
           <select name="disciplina" id="disciplina" class="form-select form-select-lg mb-3" >
            <option>Selecione ...</option>
          

       <?php
       while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>       
            <option value="<?php echo "{$linha['codigo']}"; ?>"><?php echo "{$linha['descricao']}"; ?> </option>

     <?php        
       }
       ?>
        </select>
       <br>
       <br> <br>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  
      </div>
     

</body>

</html>
