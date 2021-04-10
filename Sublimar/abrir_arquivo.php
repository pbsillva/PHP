<?php
 require_once('config.php');
 try
	{
		$conecta = new PDO("mysql:host=$localhost;dbname=$db", $usuario , $senha);
		$consultaSQL = "SELECT tipo_img, imagem FROM sublimar WHERE cod_pedido=$_GET[id]";
		$exComando = $conecta->prepare($consultaSQL); //testar o comando
		$exComando->execute(array());
        foreach($exComando as $resultado) 
		{
            $tipo = $resultado['tipo_img'];
            $conteudo = $resultado['imagem'];
            header("Content-Type: $tipo");
            echo $conteudo;
		}	
    }catch(PDOException $erro)
	{
		echo("Errrooooo! foi esse: " . $erro->getMessage());
	}
?>