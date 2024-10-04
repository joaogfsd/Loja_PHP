<?php
require "conexao.php";
$conexao = new Conexao();
$conexao->getConnection();

echo "Conexão Bem-Sucedida";