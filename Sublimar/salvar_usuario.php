<?php
require_once("config.php");
$nome=$_POST["nome"];
$telefone=$_POST["telefone"];
$data_nasc=$_POST["data_nasc"];
$rua=$_POST["rua"];
$numero=$_POST["numero"];
$complemento=$_POST["complemento"];
$cidade=$_POST["cidade"];
$estado=$_POST["estado"];


/*if(isset($_FILES['image'])){

    $extensao = strtolower(substr($_FILES['image']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "C:\ProgramData\MySQL\MySQL Server 8.0\Uploads\\"; //define o diretorio para onde enviaremos o arquivo

	move_uploaded_file($_FILES['image']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
}*/

$sql=mysqli_query($conn,"INSERT INTO usuarios
					(nome, telefone, data_nasc, rua, numero, complemento, cidade, estado) 
					values
					('$nome','$telefone','$data_nasc','$rua','$numero', '$complemento','$cidade', '$estado')");

//$insere=mysqli_query($conectado,"INSERT INTO sublimar  (nome, telefone, rua, numero, complemento, cidade) values ('$nome','$telefone','$rua','$complemento','$cidade'");

if ($sql)
{	
	echo "<script>alert('Usuário cadastrado com sucesso!');</script>";
	echo "<script>window.location='index.html';</script>";
}
else
{
	echo $sql;
	echo "<script>alert('Erro ao cadastrar o usuário!');</script>";
	echo "<script>window.location='cadastro_usuarios.html';</script>";	
}
mysqli_close($conn);
?>
	



