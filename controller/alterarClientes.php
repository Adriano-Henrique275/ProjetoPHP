<?php 
	require("../BancoDados/conexaoBanco.php");
	$nome_cliente="";
	$endereco_cliente=""; 
	$cpf_cliente=""; 
	$cidade_cliente=""; 

	if(isset($_GET["alterar"])){

		$id_cliente = htmlentities($_GET["alterar"]);

		$query=$mysqli->query("select * from tb_clientes where id_cliente = '$id_cliente'; ");
		$tabela=$query->fetch_assoc();
		$nome_cliente=$tabela["nome_cliente"];
		$endereco_cliente=$tabela["endereco_cliente"];
		$cpf_cliente=$tabela["cpf_cliente"];
		$cidade_cliente=$tabela["cidade_cliente"];		
	}
?>
<?php include_once("../includes/header.php");?>
<div class="container">
    <form method="POST" action="alterarClientes.php">
        <div class="form-group">
            <input type="hidden" name="id_cliente" value="<?php echo $id_cliente; ?>">
            <div class="mb-3">
                <label class="form-label" for="nome_cliente" >Nome</label>
                <input class="form-control" type="text" name="nome_cliente" maxlength="50" value="<?php echo $nome_cliente; ?>">
            </div><div class="mb-3">
                <label class="form-label" for="endereco_cliente" >Endereço</label>
                <input class="form-control" type="text" name="endereco_cliente" maxlength="50" value="<?php echo $endereco_cliente; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="cpf_cliente" >CPF</label>
                <input class="form-control" type="text" name="cpf_cliente" maxlength="15" value="<?php echo $cpf_cliente; ?>">		
            </div>
			<div class="mb-3">
                <label class="form-label" for="cidade_cliente" >Cidade</label>
                <input class="form-control" type="text" name="cidade_cliente" maxlength="50" value="<?php echo $cidade_cliente; ?>">
            </div>
        </div>
		<div class="col-sm text-center">
			<input class="btn btn-outline-primary" type="submit" value="Salvar" name="btn">
			<a class="btn btn-outline-success" href="../views/listaClientes.php" role="button">Retornar</a>
		</div>
	


<?php include_once("../includes/footer.php");?>


<?php 
	if(isset($_POST["btn"])){

		$id_cliente   = htmlentities($_POST["id_cliente"]);
		$nome_cliente = htmlentities($_POST["nome_cliente"]);
		$endereco_cliente = htmlentities($_POST["endereco_cliente"]);
		$cpf_cliente  = htmlentities($_POST["cpf_cliente"]);
		$cidade_cliente = htmlentities($_POST["cidade_cliente"]);

		$mysqli->query("update tb_clientes set nome_cliente='$nome_cliente',
						 endereco_cliente = '$endereco_cliente', 
						 cpf_cliente = '$cpf_cliente', 
						 cidade_cliente = '$cidade_cliente' where id_cliente = '$id_cliente'; ");
		echo $mysqli->error;

		if ($mysqli->error == "") {
			echo "<h3 class='text-center'>Alterado com sucesso</h3>";
		}
	}
?>
	</form>
</div>