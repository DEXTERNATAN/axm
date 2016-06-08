<html>
  <meta charset="UTF-8">
    <head>
      <title>Cadastro Usuário</title>
    </head>
    <body>
      <div class="container">
        <div class="row">

        <form class="form-horizontal" action="/axm/usuario/edit/<?=$usuario['id']?>" method="post">
          <fieldset>

          <legend>Editar Usuário</legend>
          <?php echo validation_errors(); ?>
          <!-- Select Basic -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Usuário</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="nome_usuario" placeholder="Nome" value="<?=$usuario['nome_usuario']?>"/>
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