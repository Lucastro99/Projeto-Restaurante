<html lang="pr-br">
      <head>

      <title>Los Mexicanos - HOME</title>

      </head>

<?php 
  include "body/head.php";
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagens/fundo.png" alt="First slide">
      <div class="carousel-caption d-none d-md-block fume">
        <h5>A Melhor Comida</h5>
        <p>O México é um país que possui uma grande variedade de ingredientes de primeira e um povo que valoriza muito sua culinária, criando pratos coloridos e gostosos. </p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/fundo2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block fume">
        <h5>No Melhor Restaurante</h5>
        <p>Cercados de muito aroma, temperos, especiarias e muito amor a culinária tornando assim um sabor sem igual. Nem sempre os pratos Mexicanos são apimentados, ou seja, alguns chegam até a ser delicados em seus sabores, permitindo assim que se notem a qualidade de seus produtos.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/fundo3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block fume">
        <h5>Los Mexicanos</h5>
        <p>A culinária Mexicana é fácil de ser preparado em casa, não sendo complicados as receitas somente em algumas exceções; e nem mesmo de serem encontradas, com suas guarnições nada extravagantes.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<h1 style="text-align: center; margin-top: 5%">Novidades no Restaurante</h1>
	<table  id="data" style="width: 70%; margin-left: auto; margin-right: auto; margin-bottom: 5%; margin-top: 2%;">
		

    </table>

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

  <script type="text/javascript">

      function buscaNovidades(){
        $.ajax({
          url : "data/data.php",
          type : 'get'
        })
        
          .done(function(dados){
               if(dados && dados.length){
                let html = ``;
                for (let i = 0; i < dados.length; i++) {
                  let {nome_produto, imagem} = dados[i];
                  html = `${html}
                  <td>
                              <div>
                                  <div>

                                      <h4>${nome_produto}</h4>
                                      
                                      <img src="imagens/produtos/${imagem}" style="width: 250px; height: 165px;">
                                  </div>
                                </div>
                  </td>`; 
                  }
                $('#data').html(html);
               }
           })
           .fail(function(error){
                console.log(error);
           }); 
        }


      $(document).ready(function(){
        buscaNovidades();
      })
      


    </script>

  </body>
</html>
