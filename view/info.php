<table class="table table-hover table-striped" id="info">
	<thead>
		<tr>
			<th> ID Cadastro </th>
            <th> Ano Fundação </th>
			<th> Dias de Funcionamento </th>
            <th> Horário de Funcionamento </th>
			<th> Editar </th>
			<th> Deletar </th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_cadastro)){
				echo '<tr><td >'.$linha['idcadastro'].'</td>';
                echo '<td>'.$linha['AnoFundacao'].'</td>';
				echo '<td>'.$linha['diasFuncionamento'].'</td>';
                echo '<td>'.$linha['HorarioFuncionamento'].'</td>';
                ?>

                <td><a href="?pagina=inserir_cadastro&editar=<?php echo $linha['idcadastro']; ?>">Editar</a></td>
                <td><a href="deleta_cadastro.php?idcadastro=<?php echo $linha['idcadastro']; ?>">Deletar</a></td></tr>
    
            <?php
                }
            ?>
        </tbody>
    
    </table>