<div class="pull-right">
	<a href="<?php echo site_url('produto/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped">
    <tr>
		<td>ID</td>
		<td>Nome</td>
		<td>Img Path</td>
		<td>Actions</td>
    </tr>
	<?php foreach($produto as $p): ?>
    <tr>
		<td><?php echo $p['id']; ?></td>
		<td><?php echo $p['nome']; ?></td>
		<td><?php echo $p['img_path']; ?></td>
		<td>
            <a href="<?php echo site_url('produto/edit/'.$p['id']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('produto/remove/'.$p['id']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>