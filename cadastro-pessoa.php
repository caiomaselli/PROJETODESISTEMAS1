<?php require_once("banco-pessoa.php");
	
	$nomePessoa = $_POST["nomePessoa"];
	$emailPessoa = $_POST["emailPessoa"];
	$empresaPessoa = $_POST["empresaPessoa"];
	$cargoPessoa = $_POST["cargoPessoa"];
	$telefonePessoa = $_POST["telefonePessoa"];
	$celularPessoa = $_POST["celularPessoa"];
	$descricaoPessoa = $_POST["descricaoPessoa"];
	$origem_id = $_POST["origem_id"];
	$tipo_pessoa_id = $_POST["tipo_pessoa_id"];

	if(inserePessoa($conexao, $nomePessoa, $emailPessoa, $empresaPessoa, $cargoPessoa, $telefonePessoa, $celularPessoa, $descricaoPessoa, $origem_id, $tipo_pessoa_id)) { ?>
    	<p class="text-success"><?= $emailPessoa; ?> foi adicionado com sucesso!</p>
		<?php } else {
    		$msg = mysqli_error($conexao);
		?>
    		<p class="text-danger"><?= $emailPessoa; ?> não foi adicionado: <?= $msg ?></p>
		<?php } ?>