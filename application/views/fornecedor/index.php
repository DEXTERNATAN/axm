<html>
	<title>Página de Fornecedores</title>
	<body>
		<div class="container">
      <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

          <div class="panel panel-default panel-table">
            <div class="panel-heading">
              <div class="row">
                <div class="col col-xs-6">
                  <h3 class="panel-title">Fornecedores</h3>
                </div>
                <div class="col col-xs-6 text-right">
                  <a href="<?=base_url('/usuario/add')?>" role="button" class="btn btn-sm btn-success btn-create">Adicionar Novo</a>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered table-list">
                <thead>
                  <tr>
                      <th><em class="fa fa-cog"></em></th>
                      <th class="hidden-xs">ID</th>
                      <th>Nome</th>
                      <th>CPF</th>
                      <th>Email</th>
                      <th>Telefone</th>
                  </tr> 
                </thead>
                <tbody>
                        <tr>
                          <?php foreach($fornecedor as $f): ?>
                          <td align="center">
                            <a href="<?php echo site_url('fornecedor/edit/'.$f['id']); ?>" class="btn btn-default"><em class="fa fa-pencil"></em>Editar</a>
                            <a href="<?php echo site_url('fornecedor/remove/'.$f['id']); ?>" class="btn btn-danger"><em class="fa fa-trash"></em>Excluir</a>
                          </td>
                          <td class="hidden-xs"><?php echo $f['id']; ?></td>
						<td><?php echo $f['nome']; ?></td>
						<td><?php echo $f['cpf']; ?></td>
						<td><?php echo $f['email']; ?></td>
						<td><?php echo $f['fone']; ?></td>
                        </tr>
						<?php endforeach; ?>
                      </tbody>
              </table>
          
            </div>
            <!-- <div class="panel-footer">
              <div class="row">
                <div class="col col-xs-4">Page 1 of 5
                </div>
                <div class="col col-xs-8">
                  <ul class="pagination hidden-xs pull-right">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                  </ul>
                  <ul class="pagination visible-xs pull-right">
                      <li><a href="#">«</a></li>
                      <li><a href="#">»</a></li>
                  </ul>
                </div>
              </div>
            </div> -->
          </div>

        </div>
      </div>
    </div>
	</body>
</html>