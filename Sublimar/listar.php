<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Cadastro de arquivos</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<body>
    <div class="container">

    <?php
    require_once("config.php");
	try{
    
        $conecta = new PDO("mysql:host=$localhost;dbname=$db", $usuario , $senha);
        $consultaSQL = "SELECT cod_pedido, nome, valor FROM sublimar";
        $exComando = $conecta->prepare($consultaSQL);
        $exComando->execute(array());
      
        echo("
             <table class='table table-striped table-bordered table-hover'>
             <thead class='thead-dark'>
             <tr>
             <th>Pedido</th>
             <th>Cliente</th>
             <th>Valor</th>
             <th>Abrir</th>
             <th>Thumbnail</th>
             </tr>
             </thead>
             ");
     
      foreach($exComando as $resultado)
      {
        echo ("
              <tr>
              <td>$resultado[cod_pedido]</td>
              <td>$resultado[nome]</td>
              <td>$resultado[valor]</td>
              <td><a href='abrir_arquivo.php?id=$resultado[cod_pedido]'>abrir</a></td>
              <td><img src='abrir_arquivo.php?id=$resultado[cod_pedido]' width='120px'/></td>
              </tr>
            ");
            
      }}catch(PDOException $erro)
      {
         echo("Errrooooo! foi esse: " . $erro->getMessage());
      }
    ?>

    </div>
</body>
</html>