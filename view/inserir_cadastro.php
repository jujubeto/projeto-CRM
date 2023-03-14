<?php if (!isset($_GET['editar'])) { ?>

	<h1>Inserir novo cadastro</h1>
	<form method="post" action="processa_cadastro.php">
		<br>
		<label style="color: #000;" class="badge badge-secondary">Nome empresa:</label><br>
		<input class="form-control" type="text" name="nomeEmpresa" placeholder="Insira o nome da Empresa">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Segmento:</label><br>
		<input class="form-control" type="text" name="Segmento" placeholder="Insira o segmento">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Nome do contato:</label><br>
		<input class="form-control" type="text" name="nomeContato" placeholder="Insira o nome do contato">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">CNPJ:</label><br>
		<input class="form-control" type="text" name="CNPJ" placeholder="CNPJ">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Telefone primário:</label><br>
		<input class="form-control" type="text" name="telefonePrimario" placeholder="Insira o telefone primário">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Telefone principal da empresa:</label><br>
		<input class="form-control" type="text" name="telefonePrincipalEmpresa" placeholder="Insira o telefone principal da empresa">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">WhatsApp:</label><br>
		<input class="form-control" type="text" name="WhatsappEmpresa" placeholder="Insira o WhatsApp da Empresa">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Telefone direto:</label><br>
		<input class="form-control" type="text" name="TelefoneDireto" placeholder="Telefone Direto">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Email da empresa:</label><br>
		<input class="form-control" type="text" name="EmailEmpresa" placeholder="Insira o email da Empresa">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Email do proprietário:</label><br>
		<input class="form-control" type="text" name="EmailProprietário" placeholder="Insira o email do proprietário">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Ano da Fundação:</label><br>
		<input class="form-control" type="text" name="AnoFundacao" placeholder="Ano da Fundação">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Dias de Funcionamento:</label><br>
		<input class="form-control" type="text" name="diasFuncionamento" placeholder="Dias de funcionamento">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Horário de Funcionamento:</label><br>
		<input class="form-control" type="text" name="HorarioFuncionamento" placeholder="Horario de Funcionamento">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Logradouro:</label><br>
		<input class="form-control" type="text" name="Lorgadouro" placeholder="Logradouro">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Número:</label><br>
		<input class="form-control" type="text" name="Numero" placeholder="Numero">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Bairro:</label><br>
		<input class="form-control" type="text" name="Bairro" placeholder="Bairro">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">CEP:</label><br>
		<input class="form-control" type="text" name="CEP" placeholder="CEP">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Cidade:</label><br>
		<input class="form-control" type="text" name="Cidade" placeholder="Cidade">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">UF:</label><br>
		<input class="form-control" type="text" name="uf" placeholder="uf">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">Formas de Pagamento:</label><br>
		<input class="form-control" type="text" name="FormasPagamento" placeholder="FormasPagamento">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">A empresa possui Site?</label><br>
		<input class="form-control" type="text" name="PossuiSite" placeholder="PossuiSite">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">A empresa possui redes sociais?</label><br>
		<input class="form-control" type="text" name="PossuiRedesSociais" placeholder="PossuiRedesSociais">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">A empresa possui fotos dos serviços ou empresa?</label><br>
		<input class="form-control" type="text" name="PossuiFotosDosServiçosouEmpresa" placeholder="PossuiFotosDosServiçosouEmpresa">
		<br><br>
		<label style="color: #000;" class="badge badge-secondary">A Empresa possui Informacoes Complementares:</label><br>
		<input class="form-control" type="text" name="InformacoesComplementares" placeholder="InformacoesComplementares">
		<br><br>
		<input type="submit" class="btn btn-success" value="Inserir cadastro">
	</form>

<?php } else { ?>
	<?php while ($linha = mysqli_fetch_array($consulta_cadastro)) { ?>
		<?php if ($linha['idcadastro'] == $_GET['editar']) { ?>
			<h1>Editar Empresa</h1>
			<form method="post" action="edita_cadastro.php">
				<input type="hidden" name="idcadastro" value="<?php echo $linha['idcadastro']; ?>">
				<br>
				<label style="color: #000;" class="badge badge-secondary">Nome da empresa:</label><br>
				<input class="form-control" type="text" name="nomeEmpresa" placeholder="Insira o nome da Empresa" value="<?php echo $linha['nomeEmpresa']; ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Segmento:</label><br>
				<input class="form-control" type="text" name="Segmento" placeholder="Insira o segmento" value="<?php echo $linha['Segmento']; ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Nome do contato:</label><br>
				<input class="form-control" type="text" name="nomeContato" placeholder="Insira o nome do contato" value="<?php echo $linha['nomeContato'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">CNPJ:</label><br>
				<input class="form-control" type="text" name="CNPJ" placeholder="CNPJ" value="<?php echo $linha['CNPJ'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Telefone primário:</label><br>
				<input class="form-control" type="text" name="telefonePrimario" placeholder="Insira o telefone primário" value="<?php echo $linha['telefonePrimario'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Telefone principal da empresa:</label><br>
				<input class="form-control" type="text" name="telefonePrincipalEmpresa" placeholder="Insira o telefone principal da empresa" value="<?php echo $linha['telefonePrincipalEmpresa'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">WhatsApp:</label><br>
				<input class="form-control" type="text" name="WhatsappEmpresa" placeholder="Insira o WhatsApp da Empresa" value="<?php echo $linha['WhatsappEmpresa'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Telefone direto:</label><br>
				<input class="form-control" type="text" name="TelefoneDireto" placeholder="Telefone Direto" value="<?php echo $linha['TelefoneDireto'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Email da Empresa:</label><br>
				<input class="form-control" type="text" name="EmailEmpresa" placeholder="Email da Empresa" value="<?php echo $linha['EmailEmpresa'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Email do proprietário:</label><br>
				<input class="form-control" type="text" name="EmailProprietário" placeholder="Insira o email do proprietário" value="<?php echo $linha['EmailProprietário'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Ano da Fundação:</label><br>
				<input class="form-control" type="text" name="AnoFundacao" placeholder="Ano da Fundação" value="<?php echo $linha['AnoFundacao'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Dias de Funcionamento:</label><br>
				<input class="form-control" type="text" name="diasFuncionamento" placeholder="Dias de funcionamento" value="<?php echo $linha['diasFuncionamento'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Horário de Funcionamento:</label><br>
				<input class="form-control" type="text" name="HorarioFuncionamento" placeholder="Horario de Funcionamento" value="<?php echo $linha['HorarioFuncionamento']?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Logradouro:</label><br>
				<input class="form-control" type="text" name="Lorgadouro" placeholder="Logradouro" value="<?php echo $linha['Lorgadouro'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Número:</label><br>
				<input class="form-control" type="text" name="Numero" placeholder="Numero" value="<?php echo $linha['Numero'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Bairro:</label><br>
				<input class="form-control" type="text" name="Bairro" placeholder="Bairro" value="<?php echo $linha['Bairro'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">CEP:</label><br>
				<input class="form-control" type="text" name="CEP" placeholder="CEP" value="<?php echo $linha['CEP'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Cidade:</label><br>
				<input class="form-control" type="text" name="Cidade" placeholder="Cidade" value="<?php echo $linha['Cidade'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">UF:</label><br>
				<input class="form-control" type="text" name="uf" placeholder="uf" value="<?php echo $linha['uf'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">Formas de Pagamento:</label><br>
				<input class="form-control" type="text" name="FormasPagamento" placeholder="Formas de Pagamento" value="<?php echo $linha['FormasPagamento'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">A empresa possui Site?</label><br>
				<input class="form-control" type="text" name="PossuiSite" value="<?php echo $linha['PossuiSite'] ?>" >
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">A empresa possui redes sociais?</label><br>
				<input class="form-control" type="text" name="PossuiRedesSociais" value="<?php echo $linha['PossuiRedesSociais'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">A empresa possui fotos dos serviços ou empresa?</label><br>
				<input class="form-control" type="text" name="PossuiFotosDosServiçosouEmpresa" value="<?php echo $linha['PossuiFotosDosServiçosouEmpresa'] ?>">
				<br><br>
				<label style="color: #000;" class="badge badge-secondary">A Empresa possui Informacoes Complementares:</label><br>
				<input class="form-control" type="text" name="InformacoesComplementares" placeholder="Informacoes Complementares" value="<?php echo $linha['InformacoesComplementares'] ?>">
				<br><br>
				<input class="btn btn-success" type="submit" value="Editar cadastro">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>