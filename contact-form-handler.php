<?php
    $nome = $_POST['nome'];
    $visitor_email = $_POST['email'];
    $visitor_telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $email_from = 'fernandobohlhalterprofissional@gmail.com';

    $email_subject = 'New form submission'

    $email_body = "User Name: $name.\n".
                        "User Email: $visitor_email.\n".
                            "User Telephone: $visitor_telefone.\n".
                                "User Message: $mensagem.\n";

    $to = "fernandobohlhalterprofissional@gmail.com"

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>