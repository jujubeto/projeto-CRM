<table class="table table-hover table-striped" id="infocomp">
	<thead>
		<tr>
			<th> ID Cadastro </th>
            <th> Formas de Pagamento </th>
			<th> Site </th>
            <th> Redes Sociais </th>
            <th> Fotos dos Serviços ou da Empresa </th>
            <th> Informações Complementares </th>
			<th> Editar </th>
			<th> Deletar </th>
		</tr>
	</thead>
	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_cadastro)){
				echo '<tr><td >'.$linha['idcadastro'].'</td>';
                echo '<td>'.$linha['FormasPagamento'].'</td>';
				echo '<td>'.$linha['PossuiSite'].'</td>';
                echo '<td>'.$linha['PossuiRedesSociais'].'</td>';
                echo '<td>'.$linha['PossuiFotosDosServiçosouEmpresa'].'</td>';
                echo '<td>'.$linha['InformacoesComplementares'].'</td>';
                ?>

                <td><a href="?pagina=inserir_cadastro&editar=<?php echo $linha['idcadastro']; ?>">Editar</a></td>
                <td><a href="deleta_cadastro.php?idcadastro=<?php echo $linha['idcadastro']; ?>">Deletar</a></td></tr>
    
            <?php
                }
            ?>
        </tbody>
    
    </table>
