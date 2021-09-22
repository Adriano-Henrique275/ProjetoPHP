<?php include_once("../includes/header.php");?>
<?php 
    if(isset($_GET["excluir"])){

        $id_produto = htmlentities($_GET["excluir"]);

        require("../BancoDados/conexaoBanco.php");
        
        $mysqli->query("delete from tb_produtos where id_produto = '$id_produto'");
        echo $mysqli->error;
        
        if ($mysqli->error==""){
            echo "<h3 class='text-center'>Excluido com Sucesso<h3>";
            echo "<div class='text-center'><a class='btn btn-outline-primary btn-sm' href='../views/listaProdutos.php'>Retornar</a></div>";
        }
    }
?>
<?php include_once("../includes/footer.php");?>