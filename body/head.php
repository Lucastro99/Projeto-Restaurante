<?php
include_once './conexao.php';
  
        
?>
<html lang="pr-br">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />

	<link rel = "shortcut icon" type = "imagem/x-icon" href = "imagens/icon.ico"/>

	<title>Los Mexicanos - RESTAURANTE</title>

	<link rel="stylesheet" type="text/css" href="estilo.css">

	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#0ad5d7">
		<div class="container">
			<a href="index.php">
				<img src="imagens/logo.png" width="250px" >
			</a>
          <button style="background-color: #0ad5d7;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="btn" role="button" href="index.php">Home</a>
        </li>
        <div class="btn-group">
          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cardapio
          </button>
          <div class="dropdown-menu">
            <?php

                    $result_usuarios = "SELECT * FROM categorias";
                    $resultado_usuarios = $conn->prepare($result_usuarios);
                    $resultado_usuarios->execute(); 
                ?>

                <?php while ($row_usuarios = $resultado_usuarios->fetch(PDO::FETCH_ASSOC)) { ?>

                <tbody>
                  <tr>
                    <a class="dropdown-item" href="http://localhost/restaurante/categoria.php?id=<?php echo ($row_usuarios['categoria_id']);?>"><?php echo $row_usuarios['nome']; ?></a>              
                  </tr>

          <?php } ?>

          </div>
        </div>
        <li class="nav-item">
          <a class="btn" role="button" href="contato.php">Contato</a>
        </li>
        <li class="nav-item">
          <a class="btn" role="button" href="sobre.php">Sobre</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

