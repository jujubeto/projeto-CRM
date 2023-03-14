<table class="table table-hover table-striped" id="contato">
	<thead>
		<tr>
			<th> ID Cadastro </th>
            <th> Telefone Primário </th>
			<th> Telefone Principal </th>
            <th> WhatsApp </th>
            <th> Telefone Direto </th>
            <th> Email Empresa </th>
            <th> Email Proprietário </th>
			<th> Editar </th>
			<th> Deletar </th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_cadastro)){
				echo '<tr><td >'.$linha['idcadastro'].'</td>';
                echo '<td>'.$linha['telefonePrimario'].'</td>';
				echo '<td>'.$linha['telefonePrincipalEmpresa'].'</td>';
                echo '<td>'.$linha['WhatsappEmpresa'].'</td>';
                echo '<td>'.$linha['TelefoneDireto'].'</td>';
                echo '<td>'.$linha['EmailEmpresa'].'</td>';
                echo '<td>'.$linha['EmailProprietário'].'</td>';
                ?>

                <td><a href="?pagina=inserir_cadastro&editar=<?php echo $linha['idcadastro']; ?>">Editar</a></td>
                <td><a href="deleta_cadastro.php?idcadastro=<?php echo $linha['idcadastro']; ?>">Deletar</a></td></tr>
    
            <?php
                }
            ?>
        </tbody>
    
    </table>