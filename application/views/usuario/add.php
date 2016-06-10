<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
    <head>
      <title>Cadastro Usuário</title>
    </head>
    <body>
      <div class="container">
        <div class="row">

        <form class="form-horizontal"  method="post">
          <fieldset>

          <legend>Cadastro de Usuário</legend>

          <!-- Select Basic -->
          <?php echo validation_errors(); ?>
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Usuário</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="nome_usuario" placeholder="Nome"/>
            </div>
          </div>

            <div align="center">
              <input type="submit" onClick="submitForm()" class="btn btn-primary btn-primary"></input>
              <a href="<?=base_url('usuario/index')?>" class="btn btn-default">Voltar</a>
            </div>
        </div>
      </div>
        </fieldset>
        </form>

          </div>
        </div>
    </body>
</html>

<script type="text/javascript">

  var submitForm = function (){
    $.ajax({
      url: '../usuario/add',
      type: 'post',
      data: {
        'nome': $("input[name='nome_usuario']").val()
      },
   });
  }
</script>