<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
    <head>
      <title>Editar Baixa</title>
    </head>
    <body>
      <div class="container">
        <div class="row">

        <form class="form-horizontal" action="/axm/baixa/edit/<?=$baixa['di']?>" method="post">
          <fieldset>
          <input type="hidden" value="<?= $baixa['produto_id']?>" name="produto_id">
          <legend>Editar Entrada de Produto</legend>
          <?php echo validation_errors(); ?>
          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Produto</label>
            <div class="col-md-4">
              <input class="form-control" type="text"  value="<?=$baixa['produto']?>"disabled/>
            </div>
           </div>
            <div class="form-group">
            <label class="col-md-4 control-label" for="user">Quantidade</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="quantidade" value="<?=$baixa['quantidade']?>"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Usuário</label>
            <div class="col-md-4">
              <select class="form-control" name='usuario'>
                <?php foreach($usuario as $u):?>
                  <?php if($u['id'] == $baixa['id_usuario']): ?>
                  		<option value=<?=$u['id']?> selected><?=$u['nome_usuario']?></option>
                	<?php else:?>
                		<option value=<?=$u['id']?>><?=$u['nome_usuario']?></option>
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