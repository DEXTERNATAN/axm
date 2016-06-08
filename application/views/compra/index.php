<div class="pull-right">
	<a href="<?php echo site_url('compra/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>ID</td>
		<td>Quantidade</td>
		<td>Value Product</td>
		<td>Data Criacao</td>
		<td>Produto Id</td>
		<td>Fornecedor Id</td>
		<td>Actions</td>
    </tr>
	<?php foreach($compra as $c): ?>
    <tr>
		<td><?php echo $c['id']; ?></td>
		<td><?php echo $c['quantidade']; ?></td>
		<td><?php echo $c['value_product']; ?></td>
		<td><?php echo $c['data_criacao']; ?></td>
		<td><?php echo $c['produto_id']; ?></td>
		<td><?php echo $c['fornecedor_id']; ?></td>
		<td>
            <a href="<?php echo site_url('compra/edit/'.$c['id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('compra/remove/'.$c['id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>