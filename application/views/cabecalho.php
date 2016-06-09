<html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?=base_url('/assets/css/bootstrap.css')?>">

<nav class="navbar navbar-default" role="navigation">
    	  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <div class="navbar-brand navbar-brand-centered">Estoque</div>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="navbar-brand-centered">
		      <ul class="nav navbar-nav">
		        <li><a href="<?=base_url('produto')?>">Produtos</a></li>
		        <li><a href="<?=base_url('fornecedor')?>">Fornecedores</a></li>
		        <li><a href="<?=base_url('usuario')?>">Usuário</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        
		        <li><a href="<?=base_url('compra')?>">Entrada</a></li>
		        <li><a href="<?=base_url('baixa')?>">Saída</a></li>		        
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
</html>
<script src="/axm/assets/angular/angular.js"></script>