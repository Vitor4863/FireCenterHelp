<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>cadastrar</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="../dao/cad-usuario.php" method="Post">
				<h1 id="titulo">Cadastrar</h1>
				<div class="grid">
					<div><input type="text" placeholder="nome" name="nome" required/></div>
					<input type="email" placeholder="Email" name="email" required/>
					<div><input type="date" name="dataNascimento" required/></div>
					<input type="text" name="usuario" placeholder="Digite o usuario" require maxlength="9">
					<div><input type="text" placeholder="telefone" name="telefone" required maxlength="9"/></div>
					<div><input type="text" placeholder="cpf"  name="cpf" required maxlength="11"/></div>
					<div><input type="text" placeholder="cep" name="cep" required maxlength="8"/></div>
					<div><input type="text" placeholder="telefone de seguranca" name="numeroSeguranca" required maxlength="9"/></div>
					<div><input type="text" placeholder="deficiencia" name="deficiencia" required maxlength="90"/></div>
					<div><input type="text" placeholder="alergia" name="alergia"  required maxlength="90"/></div>
					<div><input type="password" placeholder="senha" name="senha"   required maxlength="90"/></div>
					<div><select  name="Sangue"  id="sangue" >
						<option placeholder="Selecione seu tipo de sanguinio">Tipo de sanguinio</option>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>O+</option>
						<option>O-</option>
						<option>AB+</option>
						<option>AB-</option>
					</select></div>
					<div><label>pcd</label>
						<input type="checkbox" placeholder="pcd" name="pcd" required/></div>
				 </div>
				 
				<!--<input type="text" placeholder="nome" required/>
				<input type="date" name="data" required/>
				<input type="text" placeholder="telefone" required/>
				<input type="text" placeholder="cpf" required/>
				<input type="text" placeholder="cep" required/>
				<input type="text" placeholder="numero de seguranca"/>
				<input type="text" placeholder="deficiencia"/>
				<input type="text" placeholder="alergia"/>
				
				<select id=sangue>
					<option placeholder="Selecione seu tipo de sanguinio">Tipo de sanguinio</option>
					<option>A+</option>
					<option>b</option>
					<option>o</option>
				</select>
				<label>pcd</label>
				<input type="checkbox" placeholder="pcd"/>-->
                <button type="submit" name="btn" value="Acessar">Enviar</button>
                      
			</form>
           
		</div>
		<!--<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
                     <img src="img/0eded855366105ec4e4304465d098e48-removebg-preview.png" alt="" width="400px">
					<h1</h1>
					<p></p>
				</div>
			</div>-->
		</div>
	</div>
</body>
</html>