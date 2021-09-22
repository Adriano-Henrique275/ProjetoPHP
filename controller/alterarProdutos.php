<?php 
	require("../BancoDados/conexaoBanco.php");
	$tipo_produto="";
	$nome_produto="";
	$data_entrada="";
	$data_saida="";
	$valor_produto="";

	if(isset($_GET["alterar"])){

		$id_produto = htmlentities($_GET["alterar"]);

		$query=$mysqli->query("select * from tb_produtos where id_produto = '$id_produto' ");
		$tabela=$query->fetch_assoc();
		$tipo_produto=$tabela["tipo_produto"];
		$nome_produto=$tabela["nome_produto"];
		$data_entrada=$tabela["data_entrada"];
		$data_saida=$tabela["data_saida"];
		$valor_produto=$tabela["valor_produto"];		
		
	}
?>
<?php include_once("../includes/header.php");?>
<div class="container">
    <form method="POST" action="alterarProdutos.php">
        <div class="form-group">
            <input type="hidden" name="id_produto" value="<?php echo $id_produto; ?>">
            <div class="mb-3">
                <label class="form-label" for="tipo_produto" >Categoria do Produto</label>
                <input class="form-control" type="text" name="tipo_produto" maxlength="50" value="<?php echo $tipo_produto; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="nome_produto" >Marca do Produto</label>
                <input class="form-control" type="text" name="nome_produto" maxlength="50" value="<?php echo $nome_produto; ?>">		
            </div>
			<div class="mb-3">
                <label class="form-label" for="data_entrada">Data de entrada:</label>
                <input class="form-control" type="text" name="data_entrada" maxlength="10" value="<?php echo $data_entrada; ?>">
            </div>
			<div class="mb-3">
                <label class="form-label" for="data_saida">Data de saída:</label>
                <input class="form-control" type="text" name="data_saida" maxlength="10" value="<?php echo $data_saida; ?>">
            </div>
			<div class="mb-3">
                <label class="form-label" for="valor_produto">Valor do Produto:</label>
                <input class="form-control" type="text" name="valor_produto" maxlength="20" value="<?php echo $valor_produto; ?>">
            </div>
        </div>
		<div class="col-sm text-center">
			<input class="btn btn-primary btn-block" type="submit" value="Salvar" name="btn">
			<a class="btn btn-success btn-block" href="../views/listaProdutos.php" role="button">Retornar</a>
		</div>
	


<?php include_once("../includes/footer.php");?>


<?php 
	if(isset($_POST["btn"])){

		$id_produto   = htmlentities($_POST["id_produto"]);
		$tipo_produto  = htmlentities($_POST["tipo_produto"]);
		$nome_produto = htmlentities($_POST["nome_produto"]);
		$data_entrada  = htmlentities($_POST["data_entrada"]);
		$data_saida = htmlentities($_POST["data_saida"]);
		$valor_produto = htmlentities($_POST["valor_produto"]);

		$mysqli->query("update tb_produtos set nome_produto='$nome_produto',tipo_produto = '$tipo_produto', 
						nome_produto='$nome_produto', data_entrada='$data_entrada',
						data_saida='$data_saida', valor_produto='$valor_produto' where id_produto = '$id_produto'; ");
		echo $mysqli->error;

		if ($mysqli->error == "") {
			echo "<h3 class='text-center'>Alterado com sucesso</h3>";
		}
	}
?>
	</form>
</div>