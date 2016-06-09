<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
    <head>
      <title>Editar Fornecedor</title>
    </head>
    <body>
      <div class="container">
        <div class="row">

        <form class="form-horizontal" action="/axm/fornecedor/edit/<?=$fornecedor['id']?>" method="post">
          <fieldset>

          <legend>Editar Fornecedor</legend>
          <?php echo validation_errors(); ?>
          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="fornecedor">Fornecedor</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="nome" value="<?=$fornecedor['nome']?>"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="fornecedor">CPF</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="cpf" value="<?=$fornecedor['cpf']?>"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="fornecedor">Email</label>
            <div class="col-md-4">
              <input class="form-control" type="email" name="email" value="<?=$fornecedor['email']?>"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="fornecedor">Telefone</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="fone" value="<?=$fornecedor['fone']?>"/>
            </div>
          </div>
            <div align="center">
              <input type="submit" class="btn btn-primary btn-primary"></input>
              <a href="<?=base_url('fornecedor/index')?>" class="btn btn-default">Voltar</a>
            </div>
        </div>
      </div>
        </fieldset>
        </form>

          </div>
        </div>
    </body>
</html>