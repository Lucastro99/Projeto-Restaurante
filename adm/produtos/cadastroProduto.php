<html lang="pr-br">
	<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

	<link rel = "shortcut icon" type = "imagem/x-icon" href = "../imagens/adm.ico"/>


	<title>ADM - Restaurante</title>

	<link rel="stylesheet" type="text/css" href="../style/adm.css">

	</head>
	<body background="imagens/fundo.jpg">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-lg p-3 mb-5">

		<img src="../imagens/logo.png" width="260px">

		<button class="navbar-toggler" data-toggle="collapse" data-target="#navegacao">
			<span class="navbar-toggler-icon"></span>
		</button>
			<div class="collapse navbar-collapse" id="navegacao">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="../painel.html" class="btn btn-outline-light">VOLTAR PARA PAINEL</a>  
					</li>
				</ul>
			</div>
		</nav>
		<div class="d-flex justify-content-center">
			<h2>CADASTRAR PRODUTOS</h2>
		</div>
		<div class="container col-md-4">
		  			<form method="POST" action="processa.php" id="form" name="formcontato">
		  				<div class="form-group">
					  		<label for="exampleInputName">Categoria</label>
						    <select name="categoria_id" id="categoria_id" class="custom-select">
						    	<option>Selecione uma Categoria</option>
							  	<option value="1">Bebida</option>
							  	<option value="2">Entrada</option>
							 	<option value="3">Pratos</option>
							 	<option value="4">Sobremesa</option>
							</select>

						</div>
					 	<div class="form-group">
					  		<label for="exampleInputName">Nome do Item</label>
						    <input type="text" class="form-control" id="nome_produto" name="nome_produto" placeholder="Ex: Salada">
						</div>
						<div class="form-group">
						    <label for="exampleInputValor">Valor</label>
						    <input type="text" class="form-control" id="valor" name="valor" placeholder="Valor Sugerido">
						</div>
						<div class="form-group">
					  		<label for="exampleInputDescricao">Descrição</label>
						    <textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Ex: Salada foi Inventada..."></textarea>
						</div>
						<div class="form-group">
						    <label for="exampleInputImagem">Imagem</label><br>
						    <input type="file" name="imagem" id="imagem" class="btn btn-outline-primary">
						</div>
						  <button type="submit" id="enviar_ajax" onclick="return validar_form_contato()" class="btn btn-success">Inserir</button>
						  <button type="submit" id="limpar_form" class="btn btn-danger">Limpar</button>
					</form>
		</div>

	</body>

</html>

<script type="text/javascript">
	function validar_form_contato(){
		let categoria_id = formcontato.categoria_id.value;
		let nome_produto = formcontato.nome_produto.value;
		let valor = formcontato.valor.value;
		let descricao = formcontato.descricao.value;
		let imagem = formcontato.imagem.value;

		if(categoria_id == ""){
			alert("Campo categoria é obrigatorio");
			formcontato.categoria_id.focus();
			return false;
		if(nome_produto == ""){
			alert("Campo nome é obrigatorio");
			formcontato.nome_produto.focus();
			return false;
		}if(valor == ""){
			alert("Campo valor é obrigatorio");
			formcontato.valor.focus();
			return false;
		}if(descricao == ""){
			alert("Campo descricao é obrigatorio");
			formcontato.descricao.focus();
			return false;
		}if(imagem == ""){
			alert("Campo imagem é obrigatorio");
			formcontato.imagem.focus();
			return false;
		}
      }
    </script>

<script>
	$(document).ready(function(){
		$("#limpar_form").click(function(){
			$("#form")[0].reset();
		});
	});
</script>

<script>
	$(document).ready(function(){
		$('#enviar_ajax').click(function(){
			$.ajax({
				url:'processa.php',
				method: 'POST',
				data: {
					categoria_id: $('#categoria_id').val(),
					nome_produto: $('#nome_produto').val(),
				 	valor: $('#valor').val(),
				 	imagem: $('#imagem').val(),
				 	descricao: $('#descricao').val(),
				  
				},
				
				}
			});
		});

</script>