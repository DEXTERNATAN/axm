<?php echo validation_errors(); ?>
<?php echo form_open('compra/edit/'.$compra['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="quantidade" class="col-md-4 control-label">Quantidade</label>
		<div class="col-md-8">
			<input type="text" name="quantidade" value="<?php echo ($this->input->post('quantidade') ? $this->input->post('quantidade') : $compra['quantidade']); ?>" class="form-control" id="quantidade" />
		</div>
	</div>
	<div class="form-group">
		<label for="value_product" class="col-md-4 control-label">Value Product</label>
		<div class="col-md-8">
			<input type="text" name="value_product" value="<?php echo ($this->input->post('value_product') ? $this->input->post('value_product') : $compra['value_product']); ?>" class="form-control" id="value_product" />
		</div>
	</div>
	<div class="form-group">
		<label for="data_criacao" class="col-md-4 control-label">Data Criacao</label>
		<div class="col-md-8">
			<input type="text" name="data_criacao" value="<?php echo ($this->input->post('data_criacao') ? $this->input->post('data_criacao') : $compra['data_criacao']); ?>" class="form-control" id="data_criacao" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>