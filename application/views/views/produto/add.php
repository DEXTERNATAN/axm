
<?php echo form_open('produto/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nome" class="col-md-4 control-label">Nome</label>
		<div class="col-md-8">
			<input type="text" name="nome" value="<?php echo $this->input->post('nome'); ?>" class="form-control" id="nome" />
		</div>
	</div>
	<div class="form-group">
		<label for="img_path" class="col-md-4 control-label">Img Path</label>
		<div class="col-md-8">
			<input type="text" name="img_path" value="<?php echo $this->input->post('img_path'); ?>" class="form-control" id="img_path" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>