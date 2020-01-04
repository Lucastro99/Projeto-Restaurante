<?php
include_once 'conexao.php';     
?>

<html lang="pr-br">
			<head>

			<title>Los Mexicanos - CARDAPIO</title>

			</head>

<?php 
include "body/head.php";
?>

    <?php
        $id = $_GET['id'];

        $result_usuarios = "SELECT * FROM produtos WHERE categoria_id = $id";
        $resultado_usuarios = $conn->prepare($result_usuarios);
        $resultado_usuarios->execute(); 
	?>

	<?php while ($row_usuarios = $resultado_usuarios->fetch(PDO::FETCH_ASSOC)) { ?>

			<a href="http://localhost/restaurante/produtos.php?id=<?php echo ($row_usuarios['id']);?>">

				<div class="corpo" style="display:flex;">
	            <div class="container">
	                <div>
	                    <div class="card_img">
	                        
	                        <img src="imagens/produtos/<?php echo ($row_usuarios['imagem']);?>" class="small_img">
	                        </div>
	                </div>
	            </div>                                          
	            <div class="col-sm-4">
	               
	                <h4 style="padding-top: 20%;"><?php echo ($row_usuarios['nome_produto']);?></h4>
	                <p><?php echo ($row_usuarios['descricao']);?></p>
	                <button type="button" class="btn btn-info">R$: <?php echo ($row_usuarios['valor']);?> Reais</button>
	                </div>
	            </div>
	        </div>
    	    </a>

	<?php } ?>

      
      
      
<?php 
include "body/footer.php";
?>
		

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>