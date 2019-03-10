<h3 class="mb-5">View Paginas </h3>
<div class="row">
	<div class="col-3">
	<dl class="row">
	<?php var_dump($data); ?>
		<dt class="col-sm-4">Nome</dt>
		<dd class="col-sm-8"> <?php echo $data['user']['nome'];?></dd>
		
		<dt class="col-sm-4">Grupo</dt>
		<dd class="col-sm-8"><?php  echo $data['user']['idGroup'];?></dd>
		
		<dt class="col-sm-4">Criado em </dt>
		<dd class="col-sm-8"> <?php echo $data['user']['dt_criado'];?> </dd>
		
		<dt class="col-sm-4">Atualizado em</dt>
		<dd class="col-sm-8"> <?php echo $data['user']['dt_update'];?> </dd>
		
		
	</dl>
	</div>
	<div class="col bg-light">
			<h3> <?php echo $data['user']['email']; ?>  </h3>
			<!--  <div> <?php //echo $data['texto']; ?> </div>-->
	</div>
	
	

</div>
<p>
<a href="/admin/users/<?php echo $data['user']['id'];?>/edit" class="btn btn-primary"> Editar </a>
<a href="/admin/users/<?php echo $data['user']['id'];?>/delete" class="btn btn-danger confirm" id="confirm"> Remover </a>

<p>
<a href="/admin/users" class="btn btn-secondary"> Voltar Inicio </a>