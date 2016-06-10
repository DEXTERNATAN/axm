<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
    <head>
      <title>Cadastro Fornecedor</title>
    </head>
    <body>
      <div class="container">
        <div class="row">

        <form class="form-horizontal" method="post">
          <fieldset>

          <legend>Cadastro de Fornecedor</legend>

          <!-- Select Basic -->
          <?php echo validation_errors(); ?>
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Fornecedor</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="nome" placeholder="Nome"/>
            </div>
          </div>  
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">CPF</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="cpf" placeholder="CPF"/>
            </div>
          </div>  
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Email</label>
            <div class="col-md-4">
              <input class="form-control" type="email" name="email" placeholder="Email"/>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label" for="user">Telefone</label>
            <div class="col-md-4">
              <input class="form-control" type="text" name="fone" placeholder="xxxxx-xxxx"/>
            </div>
          </div>  

            <div align="center">
              <input type="submit" class="btn btn-primary"></input>
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

<script type="text/javascript">

  var submitForm = function (){
    $.ajax({
      url: '../fornecedor/add',
      type: 'post',
      data: {
        'nome': $("input[name='nome_usuario']").val(),
        'cpf': $("input[name='cpf']").val(),
        'email': $("input[name='email']").val(),
        'telefone': $("input[name='telefone']").val()
      },
   });
  }
</script>