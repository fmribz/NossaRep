<div class="row align-items-center" style="">
	<div class="offset-1 offset-sm-2 offset-md-3 offset-lg-4 col-10 col-sm-8 col-md-6 col-lg-4">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title text-center">Cadstro de usuário</h5>
				
				<form class="form-group" action="/inserirusuario" method="POST" id="formularioCadUsuario">
					<label for="primeiroNome">Primeiro Nome*</label>
					<input type="text" name="primeiroNome" id="primeiroNome" class="form-control">

					<label for="ultimoNome">Último Nome*</label>
					<input type="text" name="ultimoNome" id="ultimoNome" class="form-control">

					<label for="email">Email*</label>
					<input type="email" name="email" id="email" class="form-control">
					
					<label for="senha">Senha*</label>
					<input type="password" name="senha" id="senha" class="form-control">
							
					<label for="repetirSenha">Repetir senha*</label>
					<input type="password" name="repetirSenha" id="repetirSenha" class="form-control mb-3" onBlur="return validarSenha()">
					
					<div class="form-group form-check">
						<input type="checkbox" class="form-check-input" id="termos" onChange="return validarTermos()">
						<label class="form-check-label" for="termos">Li e aceito os <a href="#">Termos de uso</a> e <a href="#">Privacidades.</a></label>
					</div>
					
					<input type="button" class="btn bg-primary btn-block text-white" value="Cadastrar" id="btnCadastrar" onClick="return validarCampos()">
				</form>
			</div>
		</div>
	</div>
</div>

<script src="js/cadastrarUsuario.js"></script>