<?php

$connect = new PDO("mysql:host=localhost;dbname=restaurante", "root", "");

$data = [
	'categoria_id' => $_POST["categoria_id"],
	'nome_produto' => $_POST["nome_produto"],
	'valor' => $_POST["valor"],
	'imagem' => $_POST["imagem"],
	'descricao'=>$_POST["descricao"]
];

$stmt = $connect->prepare('INSERT INTO produtos (categoria_id, nome_produto, valor, imagem, descricao, created) VALUES (:categoria_id, :nome_produto, :valor, :imagem, :descricao, NOW())');


try{
	$connect->beginTransaction();
	$stmt->execute($data);
	$connect->commit();	
}catch (Exception $e) {
	$connect->rollback();
}

header('location: cadastroProduto.php');
exit();