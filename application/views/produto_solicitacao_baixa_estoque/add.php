<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
    <head>
      <title>Adicionar Baixa</title>
    </head>
    <body>
      <div class="container">
        <div class="row">

        <form class="form-horizontal" action="/axm/baixa/add/" method="post">
          <fieldset>

          <legend>Baixa de Produto</legend>
          <?php echo validation_errors(); ?>
          <!-- Select Basic -->

          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Produto</label>
            <div class="col-md-4">
              <select class="form-control" name='produto'>
                <?php foreach($produto as $p):?>
                  <option value=<?=$p['id']?>><?=$p['nome']?></option>
                <?php endforeach;?>
              </select>
            </div>           
          </div> 
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Quantidade</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="quantidade" placeholder="quantidade"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Usuario</label>
            <div class="col-md-4">
              <select class="form-control" name='usuario'>
                <?php foreach($usuario as $usuario):?>
                  <option value=<?=$usuario['id']?>><?=$usuario['nome_usuario']?></option>
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