<?php 
$titulo = "Currículo Online";
require_once "utils/header.php";
 ?>
<div class="body">
	<h1><center>Currículo H&O
	</center>
</h1>

</form>
<body style="background-color:powderblue;">
<table>
	<td><script type="text/javascript" src="js/function.js">


 	
 </script>
	<div class="body">
		<h2><center>Preencha os Dados Pessoais</center></h2>
		<p>Preencha os campos obrigatórios(*)</p>
	<form action="actionpage.php" method="post">
		<label>Nome(*):</label>
		<input type="text" name="nome" onblur="validation_name(this)">
		<br><br>
		<label>Idade(*):</label>
		<input type="number" name="idade" onblur="validation_idade(this)">
		<label>Sexo</label>
		<input type="Sexo" name="sexo">
		<p id="msg_erro" style ="background-color: red"></p>
		<label>Estado Civil</label>
		<input type="estadocivil" name="estadocivil">
		<br><br>
		<label>Telefone Residencial(*):</label>
		<input type="number" name="telefone" onblur="validation_telefone(this)">
		<br><br>
		<label>Telefone Celular:</label>
		<input type="number" name="Celular">
		<br><br>
		<label>E-mail:</label>
		<input type="email" required="true" name="email">
		<br><br>
		<label>Endereço(*):</label>
		<input type="text" name="endereco" onblur="validation_endereco(this)">
		<br><br>
		<label>Cidade:</label>
		<input type="text" name="cidade">
		<label>Estado:</label>
		<input type="text" name="estado">
		<br><br>
		<label>CEP:</label>
		<input type="number" name="cep">
		<br><br>
		<h2>Dados Complementares</h2>
		<label>Formação Academica:</label>
		<input type="text" name="formaçãoacademica">
		<br><br>
		<label>Qualificações e Cursos:</label>
		<input type="text" name="qualificaçõesecursos">
		<br><br>
		<label>Experiência Profissional:</label>
		<input type="text" name="experienciaprofissional">
		<br><br>
		<label>Atividades Complementares:</label>
		<input type="text" name="atividadescomplementares">
		<br><br>
		<button><button onclick="window.print()">Imprima ésta página</button></button>
		<input type="submit" value="Salvar Cadastro">
		<br>
		<br>
		</div>
	</td>
	<td><h2><center>Modernize seu Currículo</center></h2><p>
		<img src="img/mao.jpg" align="top"  width="500" height="250"></p>
		<br><br><br><br><br><br><h2><center>Faça um Upgrade no Currículo</center></h2><img src="img/digitando.jpg" alt="auto" width="500" height="250"><br><br><br><br><br></td>
</table>
</form>
</div>
</body>
<?php  require_once "utils/footer.php"?>