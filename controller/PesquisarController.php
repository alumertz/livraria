<?php
session_start();

include '../model/Conexao.php';

$searchStr = filter_var($_REQUEST['search_bar'],FILTER_SANITIZE_STRING);

$conect = new Conexao();

$_SESSION['pesquisa'] = $conect->search($searchStr);

header ('Location: ../view/php/pesquisa.php');