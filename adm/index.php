<html lang="pr-br">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />

	<link rel = "shortcut icon" type = "imagem/x-icon" href = "imagens/adm.ico"/>

	<title>ADM - Restaurante</title>

	<link rel="stylesheet" type="text/css" href="">

	</head>

	<body background="imagens/fundo.jpg">

		<div class="center" style=" margin-top: 12.8125rem; margin-bottom: 12.8125rem;">

			<div class="d-flex justify-content-center">
				<h1>PAINEL ADM RESTAURANTE</h1>
			</div>
			
				<div class="container col-md-4 mx-auto my-auto">

		  			<form method="POST">
						<div class="form-group">
						    <label for="exampleInputEmail1">Usuario:</label>
						    <input type="text" class="form-control" placeholder="Usuario" name="login">
						</div>
						<div class="form-group">
						    <label for="exampleInputPassword1">Senha:</label>
						    <input type="password" class="form-control" placeholder="Senha" name="senha">
						</div>
						  <button type="submit" class="btn btn-primary col-md-12">Fazer Login</button>
						  	<?php

								$login = "lucas";
								$senha = "123";

								if(isset($_POST["login"])){
							    
									if($_POST["login"] == $login and $_POST["senha"] == $senha){
										header("location: painel.html");
									}else{
										echo "<p style='color:red;'>Login ou Senha Invalido</p>";
									}
								}

							?>
					</form>
				</div>
			</div>
		</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
