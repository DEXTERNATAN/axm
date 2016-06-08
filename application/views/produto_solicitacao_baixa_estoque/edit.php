<?php echo validation_errors(); ?>

<?php echo form_open('produto_solicitacao_baixa_estoque/edit/'.$produto_solicitacao_baixa_estoque['di']); ?>

	<div>Quantidade : <input type="text" name="quantidade" value="<?php echo ($this->input->post('quantidade') ? $this->input->post('quantidade') : $produto_solicitacao_baixa_estoque['quantidade']); ?>" /><div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>