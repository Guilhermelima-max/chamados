<!DOCTYPE html>
<html lang="pt-BR">
  	<head>
    	<meta charset="UTF-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<title>Levpet</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>

		<a href="index.php">
			<button class="voltar">Voltar</button>
		</a>
		
		<div id="all">

			<div class="box" id="box2">

				<p class="light">Chamado</p>

				<form id="main_content" method="POST">
					<div id="form_part1">
			        	<div>
							<label class="light" for="nome">Nome:</label>
				        	<br>
				          	<input type="text" required id="nome" maxlength="45" placeholder="Digite seu nome">
						</div>
						<div>
							<label class="light" for="empresa">Empresa:</label>
				        	<br>
				          	<input type="text" required id="empresa" maxlength="45" placeholder="Digite o nome da empresa">
						</div>
						<div id="setor_assunto">
							<div>
								<label class="light" for="setor">Setor:</label>
								<br>
							    <select name="setor" id="setor" required>
							    	<option class="dark" value="" selected>Selecione</option>
								    <option class="dark" value="administracao">Administração</option>
								    <option class="dark" value="financeiro">Financeiro</option>
								    <option class="dark" value="marketing">Marketing</option>
								    <option class="dark" value="logistica">Logística</option>
								    <option class="dark" value="outros">Outros</option>
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
			          		<label class="light" for="mensagem">Ocorrência:</label>
				          	<br>
				          	<textarea id="mensagem" required maxlength="200" placeholder="Digite sua mensagem"></textarea>
			          	</div>
						<div>
			          		<label class="light" for="sugestao">Sugestão:</label>
				          	<br>
				          	<textarea id="sugestao" maxlength="100" placeholder="Digite sua mensagem"></textarea>
			          	</div>
			          	<div>
			          		<button class="dark" type="submit">Enviar</button>
			          	</div>
					</div>

			    </form>

			</div>
			
		</div>

	</body>
</html>