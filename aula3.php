<html>
<body>
<?php
	if(isset($_POST['enviar'])){
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$menssagem = $_POST['menssagem'];
	$para = "jadson.correa@gmail.com";
    if(mail ($para,$assunto,$menssagem,"From: $email\n")){
	echo "Sua Mensagem Foi enviada com sucesso";
	} 
	else{
	echo "Erro ao enviar por Favor Tente novamente mais tarde";
	}
	}

?>

<br />

<form action="" method="post">     
	Nome:<br /><input type="text" name="nome"/><br />
	Email: <br /><input type="text" name="email"/><br />
	Assunto:<br /> <input type="text" name="assunto"/><br />
	Menssagem:<br /> <textarea type="text" name="menssagem"/></textarea><br/>
	<input type="submit" name="enviar" value="enviar Email"/>
	
</form>

</body>
</html>