<table class="table table-hover table-striped" id="endereco">
	<thead>
		<tr>
			<th> ID Cadastro </th>
            <th> Logradouro </th>
			<th> Número </th>
            <th> Bairro </th>
            <th> CEP </th>
            <th> Cidade </th>
            <th> UF </th>
			<th> Editar </th>
			<th> Deletar </th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_cadastro)){
				echo '<tr><td >'.$linha['idcadastro'].'</td>';
                echo '<td>'.$linha['Lorgadouro'].'</td>';
				echo '<td>'.$linha['Numero'].'</td>';
                echo '<td>'.$linha['Bairro'].'</td>';
                echo '<td>'.$linha['CEP'].'</td>';
                echo '<td>'.$linha['Cidade'].'</td>';
                echo '<td>'.$linha['uf'].'</td>';
                ?>

                <td><a href="?pagina=inserir_cadastro&editar=<?php echo $linha['idcadastro']; ?>">Editar</a></td>
                <td><a href="deleta_cadastro.php?idcadastro=<?php echo $linha['idcadastro']; ?>">Deletar</a></td></tr>
    
            <?php
                }
            ?>
        </tbody>
    
    </table>