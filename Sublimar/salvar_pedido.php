<?php
require_once("config.php");
$fk_codigo_usuario=$_POST["fk_cod_usuario"];
$valor=$_POST["valor"];
$observacao=$_POST["observacao"];
$arquivo = $_FILES["image"]["tmp_name"];
$tamanho = $_FILES["image"]["size"];
$tipo = $_FILES["image"]["type"];


/*if(isset($_FILES['image'])){

    $extensao = strtolower(substr($_FILES['image']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "C:\ProgramData\MySQL\MySQL Server 8.0\Uploads\\"; //define o diretorio para onde enviaremos o arquivo

	move_uploaded_file($_FILES['image']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
}*/


if ( $arquivo != "none" )
  {
    $fp = fopen($arquivo, "rb");
    $conteudo = fread($fp, $tamanho);
    $conteudo = addslashes($conteudo);
	fclose($fp);
 
}


$sql=mysqli_query($mysqli,"INSERT INTO 
					pedidos (fk_cod_usuario, valor, observacao, tipo_img, imagem) 
					values 
					('$cod_usuario','$valor','$observacao','$tipo','$conteudo')");

//$insere=mysqli_query($conectado,"INSERT INTO sublimar  (nome, telefone, rua, numero, complemento, cidade) values ('$nome','$telefone','$rua','$complemento','$cidade');
 
$sql;
if ($sql)
{
	echo "<script>alert('Pedido cadastrado com sucesso!');</script>";
	//echo "<script>window.location='index.html';</script>";
}
else
{
	echo $sql;
	echo "<script>alert('Erro ao cadastrar o pedido!');</script>";
	//echo "<script>window.location='cadastro_pedido.html';</script>";	
}
mysqli_close($mysqli);
?>
	



