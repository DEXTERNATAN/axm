<?php echo validation_errors(); ?>

<?php echo form_open('produto_solicitacao_baixa_estoque/add'); ?>

	<div>Quantidade : <input type="text" name="quantidade" value="<?php echo $this->input->post('quantidade'); ?>" /><div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>