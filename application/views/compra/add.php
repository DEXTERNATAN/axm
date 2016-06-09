<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
    <head>
      <title>Adicionar Produto</title>
    </head>
    <body>
      <div class="container">
        <div class="row">

        <form class="form-horizontal" action="/axm/compra/add/" method="post">
          <fieldset>

          <legend>Entrada de Produto</legend>
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
            <label class="col-md-4 control-label" for="user">Preço</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="value_product" placeholder="Preço"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Fornecedor</label>
            <div class="col-md-4">
              <select class="form-control" name='fornecedor'>
                <?php foreach($fornecedor as $f):?>
                  <option value=<?=$f['id']?>><?=$f['nome']?></option>
                <?php endforeach;?>
              </select>
            </div>           
          </div> 

            <div align="center">
              <input type="submit" class="btn btn-primary btn-primary"></input>
              <a href="<?=base_url('compra/index')?>" class="btn btn-default">Voltar</a>
            </div>
        </div>
      </div>
        </fieldset>
        </form>

          </div>
        </div>
    </body>
</html>