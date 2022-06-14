<?php include 'conect.php'?>

<?php
	$nome = $_POST["name"];
	$email = $_POST["email"];
	$comentario = $_POST["coment"];
	$link = mysqli_connect($host, $user, $pass, $banco);

	$insert = "INSERT INTO comentario(nome,email,comentario) VALUES ('$nome', '$email','$comentario')";
	$query= mysqli_query($link, $insert);

    $sql = mysqli_query($link, $sql) "SELECT * FROM comentario";
    $row = mysqli_num_rows($sql)
    if ($row>0) {
    	while ($linha = mysqli_fetch_array($query))
    		$nome = $linha['nome']
    		$comentario = $linha['comentario']
    		
 ?>
