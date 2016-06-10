<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
    <head>
      <title>Cadastro Produto</title>
    </head>
    <body>
      <div class="container">
        <div class="row">

        <form class="form-horizontal"  method="post">
          <fieldset>

          <legend>Cadastro de Produto</legend>

          <!-- Select Basic -->
          <?php echo validation_errors(); ?>
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Produto</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="nome" placeholder="Nome"/>
            </div>
          </div>  
            <div align="center">
              <input type="submit" class="btn btn-primary"></input>
              <a href="<?=base_url('produto/index')?>" class="btn btn-default">Voltar</a>
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
      url: '../produto/add',
      type: 'post',
      data: {
        'nome': $("input[name='nome']").val(),
      },
   });
  }
</script>