<?php
//echo "Essa mesnsagem é enviada do arquivo PHP"

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];


if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $receptor = "xxxx@gmail.com";
        $assunto = "From: $name <$email>";
        $corpo = "Nome: $name\nE-mail: $email\nTelefone: $phone\nWebsite: $website\nMessage: $message\n\nSaudações, $name";
        $enviador = "From: $email";

        if(mail($receptor, $assunto, $corpo, $enviador)) {
            echo "Sua mensagem foi enviada!";
        } else {
            echo "Desculpe, falha no envio da sua mensagem!";
        }
    } else {
        echo "Insira um email válido!";
    }
} else {
    echo "Campo de email e mensagem é necessário";
}

?>
