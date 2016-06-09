<html>
	<title>Baixas no Estoque</title>
	<body>
		<div class="container">
      <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

          <div class="panel panel-default panel-table">
            <div class="panel-heading">
              <div class="row">
                <div class="col col-xs-6">
                  <h3 class="panel-title">Baixas no Estoque</h3>
                </div>
                <div class="col col-xs-6 text-right">
                  <a href="<?=base_url('/baixa/add')?>" role="button" class="btn btn-sm btn-success btn-create">Solicitar Baixa</a>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered table-list">
                <thead>
                  <tr>
                      <th><em class="fa fa-cog"></em></th>
                      <th class="hidden-xs">ID</th>
                      <th>Produto</th>
                      <th>Quantidade</th>
                      <th>Usuário</th>
                  </tr> 
                </thead>
                <tbody>
                        <tr>
                          <?php foreach($baixa as $b): ?>
                          <td align="center">
                            <a href="<?php echo site_url('baixa/edit/'.$b['di']); ?>" class="btn btn-default"><em class="fa fa-pencil"></em>Editar</a>
                            <a href="<?php echo site_url('baixa/remove/'.$b['di']); ?>" class="btn btn-danger"><em class="fa fa-trash"></em>Excluir</a>
                          </td>
                          <td class="hidden-xs"><?php echo $b['di']; ?></td>
							<td><?php echo $b['produto']; ?></td>
							<td><?php echo $b['quantidade']; ?></td>
							<td><?php echo $b['nome_usuario']; ?></td>
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