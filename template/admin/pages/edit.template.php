<h3 class="mb-5">
Editar Paginas    
</h3>

<form action="" method="post"> 
	<div class="form-group">
		<label for="adminTitulo"> Titulo <span> Este é um label </span></label>
		<input type="text" class="form-control" name="titulo" id="adminTitulo" placeholder="Titulo..." value="Dados titulo" required> 
	</div>
	<div class="form-group">
		<label for="adminUrl"> Url </label>
		<div class="input-group">
		<div class="input-group-prepend">
		<span class="input-group-text">/</span>
		</div>
			<input type="text" class="form-control" name="titulo" id="adminUrl" placeholder="Url amigavel.." value="/admin" required>
		</div>			 
	</div>
	
	<div class="form-group">
		<label for="adminData"> Data </label>
		<input type="date" class="form-control" name="titulo" id="adminData" placeholder="Data" value="01/01/2019" readonly> 
	</div>
	<div class="form-group">
			<input type="hidden" name="Texto" id="adminTexto" value="Conteudo">
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