<h3 class="mb-5">View Paginas </h3>
<div class="row">
	<div class="col-3">
	<dl class="row">
	<?php var_dump($data); ?>
		<dt class="col-sm-4">Titulo</dt>
		<dd class="col-sm-8"> <?php echo $data['titulo'];?></dd>
		
		<dt class="col-sm-4"><?php echo $data['url'];?></dt>
		<dd class="col-sm-8"> /<?php echo strtolower($data['nome']) .'/'. $data['url'];?> - <a href="../../<?php echo strtolower($data['nome']) .'/'. $data['url'];?>" targer="blank"> abrir </a></dd>
		
		<dt class="col-sm-4">Criado em </dt>
		<dd class="col-sm-8"> <?php echo $data['dt_criado'];?> </dd>
		
		<dt class="col-sm-4">Atualizado em</dt>
		<dd class="col-sm-8"> <?php echo $data['dt_update'];?> </dd>
		
		
	</dl>
	</div>
	<div class="col bg-light">
			<h3> <?php echo $data['titulo']; ?>  </h3>
			<div> <?php echo $data['texto']; ?> </div>
	</div>
	
	

</div>
<p>
<a href="/admin/<?php echo $data['id'];?>/edit" class="btn btn-primary"> Editar </a>
<a href="/admin/<?php echo $data['id'];?>/delete" class="btn btn-danger confirm" id="confirm"> Remover </a>

<p>
<a href="/admin" class="btn btn-secondary"> Voltar Inicio </a>