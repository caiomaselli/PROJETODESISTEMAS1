<?php
require_once("conecta.php");

function insereTarefa($conexao, $nomeResponsavel, $emailResponsavel, $empresaResponsavel, $contatoResponsavel, $descricaoTarefa){

	$nomeResponsavel = mysqli_real_escape_string($conexao, $nomeResponsavel);
	$emailResponsavel = mysqli_real_escape_string($conexao, $emailResponsavel);
	$empresaResponsavel = mysqli_real_escape_string($conexao, $empresaResponsavel);
	$contatoResponsavel = mysqli_real_escape_string($conexao, $contatoResponsavel);
	$descricaoTarefa = mysqli_real_escape_string($conexao, $descricaoTarefa);
	$data_criacao_tarefa = date("Y-m-d H:i:s");
	

	$query = "insert into tarefa (nome, email, empresa, contato, descricao, data_criacao_tarefa)
        values ('{$nomeResponsavel}', '{$emailResponsavel}', '{$empresaResponsavel}', '{$contatoResponsavel}', '{$descricaoTarefa}', '{$data_criacao_tarefa}')";

    return mysqli_query($conexao, $query);
}