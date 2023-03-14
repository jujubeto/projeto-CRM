
<table class="table table-hover table-striped" id="pesquisa">
	<thead>
		<tr>
			<th> Nome Contato </th>
            <th> Nome da empresa </th>
			<th> Segmento </th>
            <th> CNPJ </th>
			<th> Editar </th>
			<th> Deletar </th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_search)){
				echo '<tr><td >'.$linha['nomeContato'].'</td>';
                echo '<td>'.$linha['nomeEmpresa'].'</td>';
				echo '<td>'.$linha['Segmento'].'</td>';
                echo '<td>'.$linha['CNPJ'].'</td>';
                ?>

                <td><a href="?pagina=inserir_cadastro&editar=<?php echo $linha['idcadastro']; ?>">Editar</a></td>
                <td><a href="deleta_cadastro.php?idcadastro=<?php echo $linha['idcadastro']; ?>">Deletar</a></td></tr>
    
            <?php
                }
            ?>
        </tbody>
    
    </table>