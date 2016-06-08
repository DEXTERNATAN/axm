<div class="pull-right">
	<a href="<?php echo site_url('produto_estoque/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>ID</td>
		<td>Data Criacao</td>
		<td>Quantidade</td>
		<td>Quantidade Baixa</td>
		<td>Produto Id</td>
		<td>Actions</td>
    </tr>
	<?php foreach($produto_estoque as $p): ?>
    <tr>
		<td><?php echo $p['id']; ?></td>
		<td><?php echo $p['data_criacao']; ?></td>
		<td><?php echo $p['quantidade']; ?></td>
		<td><?php echo $p['quantidade_baixa']; ?></td>
		<td><?php echo $p['produto_id']; ?></td>
		<td>
            <a href="<?php echo site_url('produto_estoque/edit/'.$p['id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('produto_estoque/remove/'.$p['id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>