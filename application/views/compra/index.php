<html>
	<title>Entradas no Estoque</title>
	<body>
		<div class="container">
      <div class="row">
    
        <div class="col-md-10 col-md-offset-1">

          <div class="panel panel-default panel-table">
            <div class="panel-heading">
              <div class="row">
                <div class="col col-xs-6">
                  <h3 class="panel-title">Entradas no Estoque</h3>
                </div>
                <div class="col col-xs-6 text-right">
                  <a href="<?=base_url('/compra/add')?>" role="button" class="btn btn-sm btn-success btn-create">Adicionar Novo</a>
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
                      <th>Preço</th>
                      <th>Fornecedor</th>
                      <th>Data Criação</th>
                  </tr> 
                </thead>
                <tbody>
                        <tr>
                          <?php foreach($compra as $c): ?>
                          <td align="center">
                            <a href="<?php echo site_url('compra/edit/'.$c['id']); ?>" class="btn btn-default"><em class="fa fa-pencil"></em>Editar</a>
                            <a href="<?php echo site_url('compra/remove/'.$c['id']); ?>" class="btn btn-danger"><em class="fa fa-trash"></em>Excluir</a>
                          </td>
                          <td class="hidden-xs"><?php echo $c['id']; ?></td>
							<td><?php echo $c['produto']; ?></td>
							<td><?php echo $c['quantidade']; ?></td>
							<td><?php echo $c['value_product']; ?></td>
							<td><?php echo $c['nome']; ?></td>
							<td><?php echo $c['data_criacao']; ?></td>
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