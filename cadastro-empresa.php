<?php require_once("banco-empresa.php");
	
	$nomeEmpresa = $_POST["nomeEmpresa"];
	$emailEmpresa = $_POST["emailEmpresa"];
	$websiteEmpresa = $_POST["websiteEmpresa"];
	$cnpjEmpresa = $_POST["cnpjEmpresa"];
	$contatoEmpresa = $_POST["contatoEmpresa"];
	$celularEmpresa = $_POST["celularEmpresa"];
	$telefoneEmpresa = $_POST["telefoneEmpresa"];
	$descricaoEmpresa = $_POST["descricaoEmpresa"];
	$origem_empresa_id = $_POST["origem_empresa_id"];
	$setor_id = $_POST["setor_id"];

	if(insereEmpresa($conexao, $nomeEmpresa, $emailEmpresa, $websiteEmpresa, $cnpjEmpresa, $contatoEmpresa, $celularEmpresa, $telefoneEmpresa, $descricaoEmpresa, $origem_empresa_id, $setor_id)) { ?>
    	<p class="text-success"><?= $emailEmpresa; ?> foi adicionado com sucesso!</p>
		<?php } else {
    		$msg = mysqli_error($conexao);
		?>
    		<p class="text-danger"><?= $emailEmpresa; ?> não foi adicionado: <?= $msg ?></p>
		<?php } ?>