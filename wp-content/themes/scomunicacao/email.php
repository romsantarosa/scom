<?php

    if(isset($_POST['email']) && !empty($_POST['email'])){

        $to = "mourarom@gmail.com";
        $subject = "Contato do Site S Comunicação";
        $nome = $_REQUEST['name']);
        $email = $_REQUEST[['email']);
        $mensagem = $_REQUEST['message']);


        
        
        $body = "<strong>Mensagem de Contato</strong><br><br>";
        $body .= "<strong>Nome: </strong> $nome";
        $body .= "<br><strong>Email: </strong> $email";
        $body .= "<br><strong>Mensagem: </strong> $message";

        $header = "Content-Type: text/html; charset= utf-8\n";
        $header .= "From: $email Replay-To: $email\n";
        
        

        mail ($to,$subject,$body,$header);
        
        header("location:index.php?message=enviado");
        

?>