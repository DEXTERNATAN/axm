<?php echo validation_errors(); ?>
<?php echo form_open('fornecedor/edit/'.$fornecedor['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nome" class="col-md-4 control-label">Nome</label>
		<div class="col-md-8">
			<input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $fornecedor['nome']); ?>" class="form-control" id="nome" />
		</div>
	</div>
	<div class="form-group">
		<label for="fone" class="col-md-4 control-label">Fone</label>
		<div class="col-md-8">
			<input type="text" name="fone" value="<?php echo ($this->input->post('fone') ? $this->input->post('fone') : $fornecedor['fone']); ?>" class="form-control" id="fone" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $fornecedor['email']); ?>" class="form-control" id="email" />
		</div>
	</div>
	<div class="form-group">
		<label for="cpf" class="col-md-4 control-label">Cpf</label>
		<div class="col-md-8">
			<input type="text" name="cpf" value="<?php echo ($this->input->post('cpf') ? $this->input->post('cpf') : $fornecedor['cpf']); ?>" class="form-control" id="cpf" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>