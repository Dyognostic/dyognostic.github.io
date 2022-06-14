<?php include "conect.php" ?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Não Jogue Sal no Sapo</title>
</head>
<body>
	<div>
		<img src="sidebanner.jpg" class="sidebanner">
	</div>
	
	<div class="left">
		<img width="150" height="150" class="logo" src="logo.png">
		<h1>NJSS!</h1>
		<a href="paginainicial.html">Página Inicial</a>
		&nbsp;
		<p><a href="sapocururu.html">Sapo Cururu</a></p>
		<p><a href="ra.html">Rãs</a></p>
		<p><a href="perereca.html">Pererecas</a></p>
		<p><a href="diferenca.html">Saiba diferencia-los!</a></p>
		&nbsp;
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p><a href="coment.html">Deixe seu comentário!</a></p>
		<p><a href="Sobrenos.html">Sobre nós</a></p>

	</div>

		

	<div class="topo"> 		
		<h1>Comentários</h1>
	</div>

	<div class="intro"> Deixe sua experiência, opnião ou crítica. Seu comentário pode ajudar outro usuário!</div>

	<div class="form">
		<form name="form" action="comentario.php" method="post">
   			<p> Deixe seu comentário!</p>
    		<div>
       			<label for="nome">Seu nome:<label/>
       				<br>
    			<input type="text" name="nome" required />
    		</div>
    		<div>
        		<label for="email"  >E-mail:</label>
        		<br>
        		<input type="text" name="email" required/>
       	 	</div>

    		<div class="textarea">
    			<label for="comentario">Deixe seu comentário:</label>
    			<br>
        		<textarea type="textarea" class="comentario" name="comentario" maxlength="240" placeholder="Escreva aqui..."></textarea>
        	</br>
        		<input type="submit" name="submit" value="Enviar">
    		</div>
    </div>



</body>