<?php

include '../model/Conexao.php';

$searchStr = filter_var($_REQUEST['search_bar'],FILTER_SANITIZE_STRING);

$conect = new Conexao();

print_r($conect->search($searchStr));