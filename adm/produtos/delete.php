<?php

require_once "itens.php";

$pessoa = new Pessoa("relacao","localhost","root","");

$pessoa->excluirItens($_GET['id']);


?>