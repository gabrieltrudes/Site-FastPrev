<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

<?php

    $nome = addslashes($_POST['nome']);
    $emailenviado = addslashes($_POST['emailenviado']);
    $mensagem = addslashes($_POST['mensagem']);

        require("sendgrid-php/sendgrid-php.php"); // If you're using Composer (recommended)
        // Comment out the above line if not using Composer
        // require("/sendgrid-php.php");
        // If not using Composer, uncomment the above line and
        // download sendgrid-php.zip from the latest release here,
        // replacing  with the path to the sendgrid-php.php file,
        // which is included in the download:
        // https://github.com/sendgrid/sendgrid-php/releases

        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("esquecimeunome00@hotmail.com", "Gabriel");
        $email->setSubject("Mensagem de Contato");
        $email->addTo("gabrieltrudesmelo@gmail.com", "Trudes");
        $email->addContent("text/html", "Olá Gabriel, <br>Nova mensagem de contato de: $nome<br>E-mail: $emailenviado<br>Mensagem: $mensagem");
        // $email->addContent(
        //     "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
        // );
        
        $sendgrid = new \SendGrid("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");
        
        try {
            $response = $sendgrid->send($email);
            print $response->statusCode() . "\n";
            print_r($response->headers());
            print $response->body() . "\n";
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }
        
        ?>
    </body>
</html>
