<?php
require_once("conecta.php");

function insereEmpresa($conexao, $nomeEmpresa, $emailEmpresa, $websiteEmpresa, $cnpjEmpresa, $contatoEmpresa, $celularEmpresa, $telefoneEmpresa, 
	$descricaoEmpresa, $origem_empresa_id, $setor_id){

	setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
    date_default_timezone_set('America/Sao_Paulo');
    $data_criacao_emp = date("Y-m-d H:i:s");

	$nomeEmpresa = mysqli_real_escape_string($conexao, $nomeEmpresa);
	$emailEmpresa = mysqli_real_escape_string($conexao, $emailEmpresa);
	$websiteEmpresa = mysqli_real_escape_string($conexao, $websiteEmpresa);
	$cnpjEmpresa = mysqli_real_escape_string($conexao, $cnpjEmpresa);
	$contatoEmpresa = mysqli_real_escape_string($conexao, $contatoEmpresa);
	$celularEmpresa = mysqli_real_escape_string($conexao, $celularEmpresa);
	$telefoneEmpresa = mysqli_real_escape_string($conexao, $telefoneEmpresa);
	$descricaoEmpresa = mysqli_real_escape_string($conexao, $descricaoEmpresa);

	$query = "insert into empresa (nome, email, website, cnpj, contato_empresa, celular, telefone, descricao, origem_empresa_id, setor_id, data_criacao_emp)
        values ('{$nomeEmpresa}', '{$emailEmpresa}', '{$websiteEmpresa}', '{$cnpjEmpresa}', '{$contatoEmpresa}', '{$celularEmpresa}', 
        '{$telefoneEmpresa}', '{$descricaoEmpresa}', '{$origem_empresa_id}', '{$setor_id}', '{$data_criacao_emp}')";

    return mysqli_query($conexao, $query);
}

function listaOrigemEmpresa($conexao) {
    $origem_contato = array();
    $query = "select * from origem_contato";
    $resultado = mysqli_query($conexao, $query);
    while($origem = mysqli_fetch_assoc($resultado)) {
        array_push($origem_contato, $origem);
    }
    return $origem_contato;
}

function listaSetor($conexao) {
    $setor_empresa = array();
    $query = "select * from setor";
    $resultado = mysqli_query($conexao, $query);
    while($setor = mysqli_fetch_assoc($resultado)) {
        array_push($setor_empresa, $setor);
    }
    return $setor_empresa;
}