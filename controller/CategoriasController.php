<?php
session_start();

include '../model/Conexao.php';

$categoria = $_REQUEST['cat'];

$conect = new Conexao();

$_SESSION['pesquisa'] = $conect->getByCategoria($categoria);

header ('Location: ../view/php/pesquisa.php');