<h3 class="mb-5">
Editar Paginas    
</h3>
<?php var_dump($data);?>

<form action="" method="post"> 
	<div class="form-group">
		<input type="hidden" name="id" value=<?php echo $data['pagina']['id'] ?? '';?>
		<label for="adminTitulo"> Titulo <span> Este é um label </span></label>
		<input type="text" class="form-control" name="titulo" id="adminTitulo" placeholder="Titulo..." value="<?php echo $data['pagina']['titulo'];?>" required> 
	</div>
	<div class="form-group">
		<label for="adminUrl"> Url </label>
		<div class="input-group">
		<div class="input-group-prepend">
		<span class="input-group-text">/</span>
		</div>
			<input type="text" class="form-control" name="url" id="adminUrl" placeholder="Url amigavel.." value="<?php echo $data['pagina']['url'];?>" >
		</div>			 
	</div>
	
	<div class="form-group">
		<label for="adminData"> Data </label>
		<input type="date" class="form-control" name="data" id="adminData" placeholder="Data" value="<?php echo $data['pagina']['dt_criado'];?>" readonly> 
	</div>
	<div class="form-group">
			<input type="hidden" name="Texto" id="adminTexto" value="<?php echo $data['pagina']['texto'];?>">
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