<?php include_once("../includes/header.php");?>
<?php 
    if(isset($_GET["excluir"])){

        $id_cliente = htmlentities($_GET["excluir"]);

        require("../BancoDados/conexaoBanco.php");
        
        $mysqli->query("delete from tb_clientes where id_cliente = '$id_cliente'");
        echo $mysqli->error;
        
        if ($mysqli->error==""){
            echo "<h3 class='text-center'>Excluido com Sucesso</h3>";
            echo "<div class='text-center'><a class='btn btn-outline-primary' href='../views/listaClientes.php'>Retornar</a></div>";
        }
    }
?>
<?php include_once("../includes/footer.php");?>