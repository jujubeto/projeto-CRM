<?php 

include 'db.php';

$idcadastro = $_GET['idcadastro'];

$query = "DELETE FROM cadastro WHERE idcadastro = $idcadastro";

mysqli_query($conexao, $query);

echo "<script language='javascript' type='text/javascript'>  
      alert('Instituição deletada com Sucesso!!');window.location ='index.php?pagina=empresa'</script>         ";
?>