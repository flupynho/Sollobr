<?php



$to = "felippeipb@gmail.com";
$Nome = addcslashes($_POST["Nome"]);
$Email = addcslashes($_POST["Email"]);
$Mensagem = addcslashes($_POST["Email"]);

 
 $body = "Nome: " .$Nome. "\r\n".
          "E-mail "$Email. "\r\n".
          "Mensagem" .$Mensagem. "\n".
//5 – agora inserimos as codificações corretas e  tudo mais.
$header =  "Form: vagas@sollobrasil.com.br". "\r\n".
              "Reply-To:". $Email. "\r\n".
              "X=Mailer:PHP/".phpversion();
if(mail ($to,$Nome,$Email,$body,$header)){

	echo("Email enviado com sucesso.");

}else{

	echo("Email não pode ser enviado.");
}

?>