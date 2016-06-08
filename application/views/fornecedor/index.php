<div class="pull-right">
	<a href="<?php echo site_url('fornecedor/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>ID</td>
		<td>Nome</td>
		<td>Fone</td>
		<td>Email</td>
		<td>Cpf</td>
		<td>Actions</td>
    </tr>
	<?php foreach($fornecedor as $f): ?>
    <tr>
		<td><?php echo $f['id']; ?></td>
		<td><?php echo $f['nome']; ?></td>
		<td><?php echo $f['fone']; ?></td>
		<td><?php echo $f['email']; ?></td>
		<td><?php echo $f['cpf']; ?></td>
		<td>
            <a href="<?php echo site_url('fornecedor/edit/'.$f['id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('fornecedor/remove/'.$f['id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>