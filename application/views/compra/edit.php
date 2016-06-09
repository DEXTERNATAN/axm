<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
    <head>
      <title>Editar Compra</title>
    </head>
    <body>
      <div class="container">
        <div class="row">

        <form class="form-horizontal" action="/axm/compra/edit/<?=$compra['id']?>" method="post">
          <fieldset>
          <input type="hidden" value="<?= $compra['produto_id']?>" name="produto_id">
          <legend>Editar Entrada de Produto</legend>
          <?php echo validation_errors(); ?>
          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Produto</label>
            <div class="col-md-4">
              <input class="form-control" type="text"  value="<?=$compra['produto']?>"disabled/>
            </div>
           </div>
            <div class="form-group">
            <label class="col-md-4 control-label" for="user">Quantidade</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="quantidade" value="<?=$compra['quantidade']?>"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Preço</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="value_product" value="<?=$compra['value_product']?>"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Fornecedor</label>
            <div class="col-md-4">
              <select class="form-control" name='fornecedor'>
                <?php foreach($fornecedor as $f):?>
                  <?php if($f['id'] == $compra['id_fornecedor']): ?>
                  		<option value=<?=$f['id']?> selected><?=$f['nome']?></option>
                	<?php else:?>
                		<option value=<?=$f['id']?>><?=$f['nome']?></option>
                	<?php endif;?>
                <?php endforeach;?>
              </select>
            </div>           
          </div> 

            <div align="center"><input type="submit" class="btn btn-primary btn-primary"></input></div>
        </div>
      </div>
        </fieldset>
        </form>

          </div>
        </div>
    </body>
</html>