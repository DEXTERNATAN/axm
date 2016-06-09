<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
    <head>
      <title>Editar Produto</title>
    </head>
    <body>
      <div class="container">
        <div class="row">

        <form class="form-horizontal" action="/axm/produto/edit/<?=$produto['id']?>" method="post">
          <fieldset>

          <legend>Editar Produto</legend>
          <?php echo validation_errors(); ?>
          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Produto</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="nome" placeholder="Nome" value="<?=$produto['nome']?>"/>
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