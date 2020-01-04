<html lang="pr-br">
      <head>

      <title>Los Mexicanos - CONTATO</title>

      </head>

<?php 
  include "body/head.php";
?>

      <div class="container col-md-4 mx-auto my-auto">

            <form style="margin-bottom: 20%; margin-top: 20%;" method="POST" action="email/processa.php" name="formcontato">
              <h2 style="text-align: center;">Entre em Contato Conosco!</h2>
              <div class="form-group">
                  <label>Seu Nome:</label>
                  <input type="text" class="form-control" placeholder="Ex: Lucas" name="nome">
              </div>
              <div class="form-group">
                  <label>Seu Email:</label>
                  <input type="email" class="form-control" placeholder="Ex: Email_1@mexico.com" name="email">
              </div>
              <div class="form-group">
                  <label>Sua Mensagem:</label>
                  <textarea type="text" class="form-control" placeholder="Ex: Que Comida Maravilhosa..." name="mensagem"></textarea>
              </div>
                <button type="submit" class="btn btn-info col-md-12" onclick="return validar_form_contato()">Enviar Mensagem</button>
                
          </form>
        </div>
      
        <?php 
            include "body/footer.php";
         ?>
		

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script type="text/javascript">
      function validar_form_contato(){
        let nome = formcontato.nome.value;
        let email = formcontato.email.value;
        let mensagem = formcontato.mensagem.value;
        
        if(nome == ""){
          alert("Campo nome é obrigatorio");
          formcontato.nome.focus();
          return false;
        }if(email == ""){
          alert("Campo email é obrigatorio");
          formcontato.email.focus();
          return false;
        }if(mensagem == ""){
          alert("Campo mensagem é obrigatorio");
          formcontato.mensagem.focus();
          return false;
        }
      }
    </script>



	</body>
</html>