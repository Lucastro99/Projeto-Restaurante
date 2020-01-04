<?php

Class Itens{

	private $pdo;

	public function __construct($dbname, $host, $user, $senha) {
		try {
			$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
			return $this;
		}

		catch (PDOException $e) {
			echo "Erro com banco de dados: ".$e->getMessage();
			exit();
		}
		catch (Exception $e) {
			echo "Erro generico: ".$e->getMessage();
			exit();
		}
		}

//DELETAR 
	public function excluirItens($id){
		$cmd = $this->pdo->prepare("DELETE FROM produtos WHERE id = :id");
		$cmd->bindValue(":id",$id);
		$cmd->execute();

		}
		}

?>