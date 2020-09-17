<?php

	$para = 'mala-direta@medicinarg.com.br';
	$assunto =  'Mala direta -  gerado pelo meu Site medicinarg.com.br';
	$email = strtolower($_POST['email']);

		$corpo  = "<strong> Atenção Contato do site, (mensagem Urgente):</strong>". $assunto ."<br><br>";
		$corpo .= "<strong> Email: </strong>". $email ."<br>";

		$header = "Content-Type: text/html; charset = utf-8\n";
		$header .= "From: $email reply-to: $email\n";

		mail($para,$assunto,$corpo,$header);
		if(mail($para,$assunto,$corpo,$header)){

		echo '<script type="text/javascript">alert("Cadastrado na Mala Direta com sucesso")</script>';
		echo '<script language="JavaScript">location.href="index.php"</script>';
		}else {
        echo "Erro ao Cadastrar";
		}
?>