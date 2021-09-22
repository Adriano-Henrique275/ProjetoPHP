<?php include_once("../includes/header.php");?>
<main>
    <div class="container">
        <h2>Cadastrar produtos!</h2>
        <form method="POST" action="../views/cadastrarProdutos.php">
            <div class="mb-3">
                <label class="form-label" for="tipo_produto" >Digite uma categoria do produto:</label>
                <input type="text" class="form-control" id="tipo_produto" name="tipo_produto" placeholder="Tipo do produto" maxlength="50">
            </div>
            <div class="mb-3">
                <label class="form-label" for="nome_produto" >Digite uma marca de produto:</label>
                <input type="text" class="form-control" id="nome_produto" name="nome_produto" placeholder="Marca do produto" maxlength="50">
            </div>
            <div class="mb-3">
                <label class="form-label" for="data_entrada">Digite a data de entrada:</label>
                <input type="text" class="form-control" id="data_entrada" name="data_entrada" placeholder="Data: DD/MM/YYYY" maxlength="10">
            </div>
            <div class="mb-3">
                <label class="form-label" for="data_saida">Digite a data de saída:</label>
                <input type="text" class="form-control" id="data_saida" name="data_saida" placeholder="Data: DD/MM/YYY" maxlength="10">
            </div>
            <div class="mb-3">
                <label class="form-label" for="valor_produto">Digite o valor do produto:</label>
                <input type="text" class="form-control" id="valor_produto" name="valor_produto" placeholder="R$" maxlength="20">
            </div>
            <button type="submit" class="btn btn-outline-primary" name="btn">Adicionar</button>
            <a class='btn btn-outline-info' href='../views/listaProdutos.php' role="button">Lista de Produtos</a>
        </form>


<?php 
    if(isset($_POST["btn"])){

        require("../BancoDados/conexaoBanco.php");

        $tipo_produto = htmlentities($_POST["tipo_produto"]);
        $nome_produto = htmlentities($_POST["nome_produto"]);
        $data_entrada = htmlentities($_POST["data_entrada"]);
        $data_saida = htmlentities($_POST["data_saida"]);
        $Valor_produto = htmlentities($_POST["valor_produto"]);
        
        $mysqli->query("insert into tb_produtos (tipo_produto, nome_produto, data_entrada, data_saida, valor_produto) values ('$tipo_produto', '$nome_produto', '$data_entrada', '$data_saida', '$valor_produto')");
        
        echo $mysqli->error;

        if($mysqli->error == ""){
            echo "<h4 id='mensagemSucesso'>Cadastrado com sucesso</h4>";
            echo "<a id='btnMensagem' class='btn btn-outline-primary btn-sm' href='../views/listaProdutos.php'>Retornar</a>";
        }
    }
?>
    </div>
</main>
<?php include_once("../includes/footer.php");?> 