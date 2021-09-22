<?php include_once("../includes/header.php");?>
<div class="container">
    <h3>Lista dos produtos cadastrado!</h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id_produto</th>
                <th scope="col">tipo_produto</th>
                <th scope="col">nome_produto</th>
                <th scope="col">data_entrada</th>
                <th scope="col">data_saida</th>
                <th scope="col">valor_produto</th>
            </tr>
        </thead>
        <?php 
            require("../BancoDados/conexaoBanco.php");
            $query = $mysqli->query("select * from tb_produtos");
            echo $mysqli->error;

            while ($tabela = $query->fetch_assoc()){
                echo "
                <tr>
                <td scope='col'>$tabela[id_produto]</td>
                <td scope='col'>$tabela[tipo_produto]</td>
                <td scope='col'>$tabela[nome_produto]</td>
                <td scope='col'>$tabela[data_entrada]</td>
                <td scope='col'>$tabela[data_saida]</td>
                <td scope='col'>$tabela[valor_produto]</td>

                
                <td><div class='btn btn-inline'><a class='btn btn-outline-danger btn-sm' href='../controller/excluirProdutos.php?excluir=$tabela[id_produto]'>excluir</a>				
				<a class='btn btn-outline-warning btn-sm' href='../controller/alterarProdutos.php?alterar=$tabela[id_produto]'>alterar</a></div></td>
                </tr>
                ";
            }
        ?>
    </table>
    <div class="btn ">
		<a class="btn btn-outline-primary" href="../views/cadastrarProdutos.php" role="button">Adicionar</a>
		<a class="btn btn-outline-success" href="../views/listaProdutos.php" role="button">Lista Produto</a>
        <a class="btn btn-outline-info" href="../index.php" role="button">Inicio</a>
	</div>
</div>
<?php include_once("../includes/footer.php");?> 