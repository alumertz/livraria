<?php
session_start();


$_SESSION['quant'] = [$_REQUEST['quant']];
$_SESSION['idLivro'] = [$_GET['id']];

header('Location: ../view/php/carrinho.php');

