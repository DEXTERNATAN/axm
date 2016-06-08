<table border="1" width="100%">
    <tr>
		<td>Di</td>
		<td>Quantidade</td>
		<td>Produto Id</td>
		<td>Usuario Id</td>
		<td>Actions</td>
    </tr>
	<?php foreach($produto_solicitacao_baixa_estoque as $p): ?>
    <tr>
		<td><?php echo $p['di']; ?></td>
		<td><?php echo $p['quantidade']; ?></td>
		<td><?php echo $p['produto_id']; ?></td>
		<td><?php echo $p['usuario_id']; ?></td>
		<td>
            <a href="<?php echo site_url('produto_solicitacao_baixa_estoque/edit/'.$p['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('produto_solicitacao_baixa_estoque/remove/'.$p['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>