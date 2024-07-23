<?php

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$telefone = addcslashes($_POST['telefone']);

$para = "matheusalmeida387@gmail.com";
$assunto = "Coleta de Dados - Ministério Jovem";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

$cabeca = "From: matheusalmeida0908@icloud.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)) {
    echo("E-mail enviado com sucesso!");
}else {
    echo("Houve um erro ao enviar o email!");
}

?>