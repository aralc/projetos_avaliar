<h3 class="mb-5">
Cria usuário    
</h3>



<form action="" method="post"> 
	<div class="form-group">
		<input type="hidden" name="id" value=<?php echo $data['user']['id'] ?? '';?>
		<label for="userNome"> Nome <span> Este é um label </span></label>
		<input type="text" class="form-control" name="user" id="userNome" placeholder="Nome..." value="<?php echo $data['user']['nome'] ?? '';?>"required> 
	</div>
	<div class="form-group">
		<label for="userEmail"> Email </label>
		<div class="input-group">
		<div class="input-group-prepend">
		<span class="input-group-text">@</span>
		</div>
			<input type="email" class="form-control" name="email" id="userEmail" value="<?php echo $data['user']['email'] ?? '';?>" placeholder="Email Usuário.." >
		</div>			 
	</div>
	<div class="form-group">
	<label for="userGrupo"> Grupo </label>
		<div class="input-group">
		<div class="input-group-prepend">
		<span class="input-group-text">G</span>
		</div>
	
		<select name="select" class="form-control">
			<option value="1">admin</option>
			<option value="2">start</option>
		</select> 
	</div>
	</div>
	<div class="form-group">
		<label for="userGrupo"> Senha </label>
		<div class="input-group">
		<div class="input-group-prepend">
		<span class="input-group-text">%@!#</span>
		</div>
		
		<input class="form-control" type="password" name='senha' id='userPwd' required placeholder="digite sua senha">
	</div>
	</div>
	
<!-- 	
	<div class="form-group">
			<input type="hidden" name="Texto" id="adminTexto" value="">
			<trix-editor input="adminTexto"> 
			
			</trix-editor>  
	</div>
	 -->
	<button type="submit" class="btn btn-primary">SALVAR</button>
	<hr>
	
</form>


		* <cite id="notas"> Clique nos labels para saber qual campo deve preencher </cite>
		
<hr>
<p>

<a href="<?php echo $_SERVER['HTTP_REFERER'];?>" class="btn btn-secondary"> Voltar Inicio </a>


