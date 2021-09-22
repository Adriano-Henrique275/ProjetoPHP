<?php include_once("../includes/header.php");?>
<div class="container">
    <h2>Lista de Clientes</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">nome</th>
                <th scope="col">endereco</th>
                <th scope="col">cpf</th>
                <th scope="col">cidade</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <?php 
            require("../BancoDados/conexaoBanco.php");
            $query = $mysqli->query("select * from tb_clientes");
            echo $mysqli->error;

            while ($tabela = $query->fetch_assoc()){
                echo "
                <tr>
                <td scope='col'>$tabela[id_cliente]</td>
                <td scope='col'>$tabela[nome_cliente]</td>
                <td scope='col'>$tabela[endereco_cliente]</td>
                <td scope='col'>$tabela[cpf_cliente]</td>
                <td scope='col'>$tabela[cidade_cliente]</td>
                
                <td><div class='btn btn-inline'><a class='btn btn-outline-danger btn-sm' href='../controller/excluirClientes.php?excluir=$tabela[id_cliente]'>excluir</a>				
				<a class='btn btn-outline-warning btn-sm' href='../controller/alterarClientes.php?alterar=$tabela[id_cliente]'>alterar</a></div></td>
                </tr>
                ";
            }
        ?>
    </table>
    <div class="btn ">
		<a class="btn btn-outline-primary" href="../views/cadastrarClientes.php" role="button">Adicionar</a>
		<a class="btn btn-outline-success" href="../views/listaClientes.php" role="button">Lista Cliente</a>
        <a class="btn btn-outline-info" href="../index.php" role="button">Inicio</a>
	</div>
</div>
<?php include_once("../includes/footer.php");?> 