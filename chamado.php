<?php
include "_script/config.php";
$consulta="SELECT * FROM tbl_empresa";
$con=mysqli_query($conn,$consulta)or die('Query failed: ' . mysqli_error($conn));


?>
<!DOCTYPE html>
<html lang="pt-BR">
  	<head>
    	<meta charset="UTF-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<title>OSLEC</title>
		<link rel="stylesheet" type="text/css" href="public/css/style.css">
	</head>
	<body>

		<a href="index.php">
			<button class="voltar">Voltar</button>
		</a>
		
		<div id="all">

			<div class="box" id="box2">

				<p class="light">Chamado</p>

				<form id="main_content" action="_script/caduser.php" method="post">
					<div id="form_part1">
			        <div>
							<label class="light" for="nome">Nome:</label>
				      <br>
				      <input type="text" required id="nome" name="nome"maxlength="45" placeholder="Digite seu nome">
						</div>

						<div>
							<label class="light" for="CPF">CPF:</label>
				      <br>
				      <input type="text" name="CPF"required id="cpf" maxlength="11" placeholder="Digite seu cpf">
						</div>
						<div id="empresa">
							<div>
							<label class="light" for="empresa">Empresa:</label>
								<br>
							    <select name="empresa" id="empresa" required>
									<?php while($dado = $con->fetch_array()) { ?>
								    <option class="dark" value="<?php echo $dado['id_empresa'];?>"><?php echo $dado['nome'];?> </option>
										<?php } ?>
							    </select>
							</div>
				          	<div>
						<div id="setor_assunto">
							<div>
								<label class="light" for="setor">Departamento:</label>
								<br>
							    <select name="departamento" id="departamento" required>
							
							    </select>
							</div>
				          	<div>
								<label class="light" for="assunto">Assunto:</label>
								<br>
							    <select name="assunto" id="assunto" required>
							    	<option class="dark" value="" selected>Selecione</option>
								    <option class="dark" value="duvida">Dúvida</option>
								    <option class="dark" value="reclamacao">Reclamação</option>
								    <option class="dark" value="outros">Outros</option>
							    </select>
							</div>
						</div>
						<div>
			          		<label class="light" for="ocorrencia">Ocorrência:</label>
				          	<br>
				          	<textarea id="ocorrencia" name="ocorrencia" required maxlength="200" placeholder="Digite sua mensagem"></textarea>
			          	</div>
						<div>
			          		<label class="light" for="sugestao">Sugestão:</label>
				          	<br>
				          	<textarea id="sugestao" name="sugestao" maxlength="100" placeholder="Digite sua mensagem"></textarea>
			          	</div>
			          	<div>
			          		<button class="dark" type="submit"value="Enviar"name="enviar" >Enviar</button>
			          	</div>
					</div>

			    </form>

			</div>
			
		</div>

	</body>
</html>