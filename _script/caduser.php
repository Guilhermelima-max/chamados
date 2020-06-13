<?php
include "config.php"; 

$nome=$_POST['nome'];
$cpf=$_POST['CPF'];
$empresa=$_POST['empresa'];
$departamento=$_POST['setor'];
$assunto=$_POST['assunto'];
$ocorrencia=$_POST['ocorrencia'];
$sugestao=$_POST['sugestao'];




$query="INSERT INTO tbl_usuario(nome,cpf,fkEmpresa) values('$nome','$cpf','$empresa')";

$result=mysqli_query($conn,$query)or die('Query failed: ' . mysqli_error($conn));
 
mysqli_close($conn);
?>
