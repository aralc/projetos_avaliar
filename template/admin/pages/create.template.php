<h3 class="mb-5">
Criar paginas    
</h3>

<form action="" method="post"> 
	<div class="form-group">
		<input type="hidden" name="id" value=<?php echo $data['pagina']['id'] ?? '';?>
		<label for="adminTitulo"> Titulo <span> Este é um label </span></label>
		<input type="text" class="form-control" name="titulo" id="adminTitulo" placeholder="Titulo..." required> 
	</div>
	<div class="form-group">
		<label for="adminUrl"> Url </label>
		<div class="input-group">
		<div class="input-group-prepend">
		<span class="input-group-text">/</span>
		</div>
			<input type="text" class="form-control" name="url" id="adminUrl" placeholder="Url amigavel.." >
		</div>			 
	</div>
	
	<div class="form-group">
		<select name="select" class="form-control">
			<option value="1">Admin</option>
			<option value="2">Start</option>
		</select> 
	</div>
	<div class="form-group">
			<input type="hidden" name="Texto" id="adminTexto" value="">
			<trix-editor input="adminTexto"> 
			
			</trix-editor>  
	</div>
	<button type="submit" class="btn btn-primary">SALVAR</button>
	<hr>
	
</form>


		* <cite id="notas"> Clique nos labels para saber qual campo deve preencher </cite>
		
<hr>
<p>

<a href="/admin" class="btn btn-secondary"> Voltar Inicio </a>