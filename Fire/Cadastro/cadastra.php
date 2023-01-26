<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://unpkg.com/phosphor-icons"></script>
	<title>Cadastrar</title>
</head>
<body>
	
	<div class="container" id="container">
		<div class="form-container log-in-container">
		<a class= "login" href="../login/login.php"><i class="ph-arrow-circle-left"></i> </a>
			<form action="../dao/cad.php" method="Post">
				<h1 id="titulo">Prencha seus Dados</h1>
				<div class="grid">
					<div><input type="text" placeholder="Nome" name="nome" required/></div>
					<input type="email" placeholder="Email" name="email" required/>
                    <input type="usuario" placeholder="Usuario" name="usuario" required/>
                    <input type="password" placeholder="Senha" name="senha" required/>
					<div><input type="date" name="dataNascimento" required/></div>
					<div><input type="text" placeholder="Telefone" name="telefone" required maxlength="12"/></div>
					<div><input type="text" placeholder="CPF"  id="cpf" name="cpf" maxlength="14" onkeydown="javascript: fMasc( this, mCPF );" required maxlength="11" /></div>
					<div><input type="text" placeholder="CEP" name="cep" required maxlength="8"/></div>
					<div><input type="text" placeholder="Numero de seguranca" name="numeroSeguranca" required maxlength="9"/></div>
					<div><input type="text" placeholder="Alergia" name="alergia"  required maxlength="90"/></div>
					<div><select  name="sangue"  id="sangue" >
						<option placeholder="Selecione seu tipo de sanguinio">Tipo de sanguinio</option>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>O+</option>
						<option>O-</option>
						<option>AB+</option>
						<option>AB-</option>
					</select>
				</div>
				<select  name="pcd"  id="sangue" >
						<option >PCD</option>
						<option>Sim</option>
						<option>Não</option>
					
					</select>
				 </div>
                <button type="submit" name="btn" value="Acessar">Enviar</button>
			</form>
           
		</div>
		
		</div>
	</div>
	<script>
	function is_cpf (c) {

if((c = c.replace(/[^\d]/g,"")).length != 11)
  return false

if (c == "00000000000")
  return false;

var r;
var s = 0;

for (i=1; i<=9; i++)
  s = s + parseInt(c[i-1]) * (11 - i);

r = (s * 10) % 11;

if ((r == 10) || (r == 11))
  r = 0;

if (r != parseInt(c[9]))
  return false;

s = 0;

for (i = 1; i <= 10; i++)
  s = s + parseInt(c[i-1]) * (12 - i);

r = (s * 10) % 11;

if ((r == 10) || (r == 11))
  r = 0;

if (r != parseInt(c[10]))
  return false;

return true;
}


function fMasc(objeto,mascara) {
obj=objeto
masc=mascara
setTimeout("fMascEx()",1)
}

function fMascEx() {
obj.value=masc(obj.value)
}

function mCPF(cpf){
cpf=cpf.replace(/\D/g,"")
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d)/,"$1.$2")
cpf=cpf.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
return cpf
}

cpfCheck = function (el) {
  document.getElementById('cpfResponse').innerHTML = is_cpf(el.value)? '<span style="color:green">válido</span>' : '<span style="color:red">inválido</span>';
  if(el.value=='') document.getElementById('cpfResponse').innerHTML = '';
}
	</script>
</body>
</html>