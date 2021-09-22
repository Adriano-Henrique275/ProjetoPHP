<?php include_once("includes/header.php"); ?>
<main>
	<div id="index">
		<div class="container">
		<h2 class="text-center">Seja bem vindo!</h2>			
			<div class="form-group">
				<h4 class="text-center">Escolha uma opção para efetuar um cadastro!</h4>
				<div class="text-center ">
					<div class="btn btn-inline">
						<h5>Cadastrar clientes ?</h5>
						<p>Clicar na opção cliente</p>
						<a class="btn btn-outline-primary btn-block" href="/views/cadastrarClientes.php" role="button">Clientes</a>
					</div>		
					<div class="btn btn-inline">
						<h5>Cadastrar produtos ?</h5>
						<p>Clicar na opção produtos</p>
						<a class="btn btn-outline-success btn-block" href="/views/cadastrarProdutos.php" role="button">Produtos</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php include_once("includes/footer.php"); ?>