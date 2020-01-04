<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];
		
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "lucas_rcastro1@hotmail.com");
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "lucas.rcastro1@gmail.com");
        $content = new SendGrid\Content("text/html", "Olá Lucas, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        header('location: ../contato.html')
		
        ?>
    </body>
</html>
