<?php require_once("banco-tarefa.php");
	
	$nomeResponsavel = $_POST["nomeResponsavel"];
	$emailResponsavel = $_POST["emailResponsavel"];
	$empresaResponsavel = $_POST["empresaResponsavel"];
	$contatoResponsavel = $_POST["contatoResponsavel"];
	$descricaoTarefa = $_POST["descricaoTarefa"];

	if(insereTarefa($conexao, $nomeResponsavel, $emailResponsavel, $empresaResponsavel, $contatoResponsavel, $descricaoTarefa)) { ?>
    	<p class="text-success"><?= $emailResponsavel; ?> foi adicionado com sucesso!</p>
		<?php } else {
    		$msg = mysqli_error($conexao);
		?>
    		<p class="text-danger"><?= $emailResponsavel; ?> não foi adicionado: <?= $msg ?></p>
		<?php } ?>