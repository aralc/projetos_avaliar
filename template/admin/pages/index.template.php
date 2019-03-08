
<h3 class="mb-5">  Administração de portifolio - paginas </h3>

<table class="table table-houver">
	<thead>
		<tr>
		<th>#</th>
		<th>Titulo</th>
		<th>Categoria</th>
		<th></th>
		</tr>
	</thead>
	
	
	<tbody>
<?php foreach($data['paginas'] as $v) : ?>	
		<tr>
			<td><?php echo $v['id'] ;?></td>
			<td><a href="/<?php echo strtolower($v['nome']);?>/view/<?php echo $v['id'] ;?>"><?php echo $v['titulo'] ;?></a></td>
			<td> <?php echo $v['nome']?></td>
			<td class="text-right"><a href="/admin/view/<?php echo $v['id'] ;?>" class="btn btn-primary tbn-sm">VER</a></td>
		</tr>
<?php endforeach; ?>		
	</tbody>
</table>



<a href="/admin/create" class="btn btn-secondary"> Novo </a>



