var primeiroNome = document.getElementById("primeiroNome");
var ultimoNome = document.getElementById("ultimoNome");
var email = document.getElementById("email");
var senha = document.getElementById("senha");
var repetirSenha = document.getElementById("repetirSenha");
var termostermos = document.getElementById("termos");
var btnCadastrar = document.getElementById("btnCadastrar");
var formularioCadUsuario = document.getElementById("formularioCadUsuario");

btnCadastrar.disabled = true;

function validarTermos(){
	if(termos.checked == true){
		btnCadastrar.disabled = false;
	}
	else{
		btnCadastrar.disabled = true;
	}
}

function validarSenha(){
	if(senha.value != repetirSenha.value){
		alert("As senhas não conferem");
	}
}

function validarCampos(){
	if(primeiroNome.value == ""){
		alert("Preencha o campo Primeiro Nome");
		return;
	}
	if(ultimoNome.value == ""){
		alert("Preencha o campo Último Nome");
		return;
	}
	if(email.value == ""){
		alert("Preencha o campo Email");
		return;
	}
	if(senha.value == ""){
		alert("Preencha o campo Senha");
		return;
	}
	if(senha.value != "" && senha.value != repetirSenha.value){
		validarSenha();
		return;
	}
	
	formularioCadUsuario.submit();
}