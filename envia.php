<?php

     $nome = addcslashes($_POST[nome]);
     $email = addcslashes($_POST[E-mail]);
     $celular = addcslashes($_POST[Seu celular]);
     $mensagem = addcslashes($_POST[Sua mensagem]);

     $para = "alexdevdognini@outlook.com";
     $assunto = "coleta de dados - meu portifolio";

     $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$celular."\n"."Mensagem: ".$mensagem."\n".

     $head = "From alexdognini@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

     if(mail($para,$assunto,$corpo,$head)){
          echo("E-mail enviado com sucesso!");
     }else{
          echo("Houve um erro ao enviar o e-mail!");
     }



?>