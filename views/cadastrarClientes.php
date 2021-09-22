<?php include_once("../includes/header.php");?>
<main>
    <div class="container">
        <h2>Cadastrar clientes!</h2>
        <form method="POST" action="../views/cadastrarClientes.php" name="formularioCliente">
            <div class="mb-3">
                <label class="form-label" for="nome">Digite seu nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" maxlength="50">
            </div>
            <div class="mb-3">
                <label class="form-label" for="endereco" >Digite seu Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço completo" maxlength="50">
            </div>
            <div class="mb-3">
                <label class="form-label" for="cpf">Digite seu CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF: 00.000.000-00" maxlength="15">
            </div>
            <div class="mb-3">
                <label class="form-label" for="cidade">Digite sua Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" maxlength="50">
            </div>
            <button type="submit" class="btn btn-outline-primary" name="btn" onclick="validar()">Adicionar</button>
            <a class='btn btn-outline-info' href='../views/listaClientes.php' role="button">Lista de Clientes</a>
        </form>

<?php 
    if(isset($_POST["btn"])){

        require("../BancoDados/conexaoBanco.php");

        $nome = htmlentities($_POST["nome"]);
        $endereco = htmlentities($_POST["endereco"]);
        $cpf = htmlentities($_POST["cpf"]);
        $cidade = htmlentities($_POST["cidade"]);
        
        $mysqli->query("insert into tb_clientes (nome_cliente, endereco_cliente, cpf_cliente, cidade_cliente) 
                        values('$nome', '$endereco', '$cpf', '$cidade'); ");
        
        echo $mysqli->error;

        if($mysqli->error == ""){
            echo "<h4 class='text-center'>Cadastrado com sucesso!</h4>";
            echo "<a class='btn btn-outline-primary btn-sm' href='../views/listaClientes.php'>Lista</a>";
            echo "<a class='btn btn-outline-primary btn-sm' href='../index.php'>Inicio</a>";
        }

    }
?>
    </div>
</main>
<?php include_once("../includes/footer.php");?> 