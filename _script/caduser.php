<?php
include "config.php"; 

$nome=$_POST['nome'];
$cpf=$_POST['CPF'];
$empresa=$_POST['empresa'];
$assunto=$_POST['assunto'];
$ocorrencia=$_POST['ocorrencia'];
$sugestao=$_POST['sugestao'];






//seleciona tudo da tbl usuario onde cpf seja igual ao cpf digitado pelo usuarios
$cpfquery=mysqli_query($conn,"select * from tbl_usuario where cpf = '$cpf'");
$numRegistros = mysqli_num_rows($cpfquery);
//caso não exista um usuario com esse cfp
if( $numRegistros == 0){
  //executa isso
  $query="INSERT INTO tbl_usuario(nome,cpf,fkEmpresa) values('$nome','$cpf','$empresa')";
  $result=mysqli_query($conn,$query)or die('Query failed: ' . mysqli_error($conn));

  $idquery=mysqli_query($conn,"SELECT * FROM tbl_usuario where cpf = '{$cpf}'"); 
  $dadoidcpf = mysqli_fetch_array($idquery);
  $iduser = $dadoidcpf['id_usuario'];

  $regoc="INSERT INTO tbl_ocorrencia(assunto,desc_ocorrencia,sugestao,fkEmpresaid,fkUsuarioid,estado) values 
  ('$assunto','$ocorrencia','$sugestao','$empresa','$iduser','0')";
  $regocresult=mysqli_query($conn,$regoc) or die('Query failed: ' . mysqli_error($conn));
  


  
}else{
//se nao isso


$idquery=mysqli_query($conn,"SELECT * FROM tbl_usuario where cpf = '{$cpf}'"); 
$dadoidcpf = mysqli_fetch_array($idquery);
$iduser = $dadoidcpf['id_usuario'];
$idemp=$dadoidcpf['fkEmpresa'];
$regoc="INSERT INTO tbl_ocorrencia(assunto,desc_ocorrencia,sugestao,fkEmpresaid,fkUsuarioid,estado) values 
('$assunto','$ocorrencia','$sugestao','$idemp','$iduser','0')";
$regocresult=mysqli_query($conn,$regoc) or die('Query failed: ' . mysqli_error($conn));
  
}   
mysqli_close($conn);



?>
<!DOCTYPE html>
<html lang="pt-BR">
  	<head>
    	<meta charset="UTF-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<title>Os Lec</title>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
	<body>
		
		<div id="all">

			<a href="../chamado.php">
				<div class="box1 box">

					<p class="light">Abrir chamado</p>

				</div>
			</a>

			<div id="space"></div>

			<a href="../ver_chamado.php">
				<div class="box1 box">

					<p class="light">Ver chamado</p>

				</div>
			</a>

			
		</div>

	</body>
</html>
