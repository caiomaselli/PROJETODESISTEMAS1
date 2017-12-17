<?php
require_once("conecta.php");

function inserePessoa($conexao, $nomePessoa, $emailPessoa, $empresaPessoa, $cargoPessoa, $telefonePessoa, $celularPessoa, $descricaoPessoa, $origem_id, 
	$tipo_pessoa_id){

	setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
    date_default_timezone_set('America/Sao_Paulo');
    $data_criacao = date("Y-m-d H:i:s");

	$nomePessoa = mysqli_real_escape_string($conexao, $nomePessoa);
	$emailPessoa = mysqli_real_escape_string($conexao, $emailPessoa);
	$empresaPessoa = mysqli_real_escape_string($conexao, $empresaPessoa);
	$cargoPessoa = mysqli_real_escape_string($conexao, $cargoPessoa);
	$telefonePessoa = mysqli_real_escape_string($conexao, $telefonePessoa);
	$celularPessoa = mysqli_real_escape_string($conexao, $celularPessoa);
	$descricaoPessoa = mysqli_real_escape_string($conexao, $descricaoPessoa);
	
	$query = "insert into pessoas (nome, email, empresa, cargo, telefone, celular, descricao, origem_id, tipo_pessoa_id, data_criacao)
        values ('{$nomePessoa}', '{$emailPessoa}', '{$empresaPessoa}', '{$cargoPessoa}', '{$telefonePessoa}', '{$celularPessoa}', '{$descricaoPessoa}', '{$origem_id}', '{$tipo_pessoa_id}', '{$data_criacao}')";

    return mysqli_query($conexao, $query);
}

function listaOrigemPessoa($conexao) {
    $origem_contato = array();
    $query = "select * from origem_contato";
    $resultado = mysqli_query($conexao, $query);
    while($origem = mysqli_fetch_assoc($resultado)) {
        array_push($origem_contato, $origem);
    }
    return $origem_contato;
}

function listaTipoPessoa($conexao) {
    $tipo_pessoa = array();
    $query = "select * from tipo_pessoa";
    $resultado = mysqli_query($conexao, $query);
    while($tipo = mysqli_fetch_assoc($resultado)) {
        array_push($tipo_pessoa, $tipo);
    }
    return $tipo_pessoa;
}