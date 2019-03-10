
<h3 class="mb-5">  Administração de portifolio - Usuários  </h3>


<a href="/admin/users/create" class="btn btn-secondary"> Novo Usuário </a>

<table class="table table-houver">
	<thead>
		<tr>
		<th>#</th>
		<th> Nome Usuário </th>
		<th> Grupo </th>
		<th></th>
		</tr>
	</thead>
	
	
	<tbody>




	
<?php  foreach($data['user'] as $v) : ?>	
		<tr>
			<td><?php echo $v['id'] ?? '';?></td>
			<td><?php echo $v['nome'] ?? '';?></td>
			<td> <?php echo $v['idGroup'] ?? '' ;?></td>
			<td class="text-right">
			<a href="/admin/users/<?php echo $v['id'] ;?>/view" class="btn btn-primary tbn-sm">VER</a>
			<a href="/admin/users/<?php echo $v['id'] ;?>/delete" class="btn btn-danger tbn-sm confirm" id="confirm">DELETE</a>
			</td>
		</tr>
<?php endforeach; ?>		
	</tbody>
</table>







