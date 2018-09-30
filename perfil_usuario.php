<html>
<!–Version 0.1 por Manuel Jaén–>
<head>
	<title>Perfil de usuario</title>
	<!-usamos el charset utf8 para poder mostrar tildes y cosas asi **MANUEL**->
	<meta charset="UTF-8">

	<!-hay que importar el CSS (aqui en el head) que se vaya a usar **MANUEL**->

</head>

<body>

	<!-Uso divisiones para que sea mas facil aplicarles las clases del CSS **MANUEL**->
	
	<!-este div esta dedicado para la imagen del usuario, mostrarla y un boton para poder cambiarla **MANUEL**->	
	<div>
		<!-el importe de imagen supongo que se hace de la base de datos **MANUEL**->
		<img src="https://images.discordapp.net/avatars/468554045028565002/5c42f8221a3946a3ac97ec7e9b4b57c4.png?size=512"<?php /*insertar aqui la consulta de PHP de la base de datos que haga un ECHO con el nombre de la imagen ("imagen.extension") como source, mientras dejare un ejemplo de internet para poder acomodar el css **MANUEL** */?>>
		<br>
		<!-este form debe llevar a la pagina de cambio de imagen con su accion (supongo) **MANUEL**->
		<form>
			<input type="submit" value="cambiar imagen">
		</form>
	</div>
	
	<!-este div es para mostrar la informacion del usuario**MANUEL**->
	<div>
	
		Codigo de usuario: 007<?php /*supongo que aqui va el codigo de php para jalar el codigo de la base de datos e imprimirlo, mientras, dejare un codigo de ejemplo **MANUEL** */?>
		<br>
		Nombre de usuario: James <?php /*lo mismo que dije arriba, solo que con nombre de usuario **MANUEL** */?>
		<br>
		<!-????? estoy confundido, para que le mostrarias su contraseña al propio usuario??? XD comunicar a los de diseño **MANUEL**>
		Contraseña: AWADECOCO420 <?php /*lo mismo que dije arriba, solo que con contraseña **MANUEL** */?>
		<br>
		Email: lostucanesdetujuana@utp.ac.pa<?php /*lo mismo que dije arriba, solo que con email **MANUEL** */?>
		<br>
		
		<!-aqui voy a poner un form porque asumo que esta cosa de "materia" y al lado dice "search" probablemente funcione con un boton o una manera de escribir texto de forma dinamica o algo asi **MANUEL**->
		<form>
		Materia: <input type="text">
		<!-agregar boton si es necesario, yo solo puse lo que se me mostraba **MANUEL**->
		</form>
	</div>
	
	<!-este div es para la tabla con codigos y materias **MANUEL**->
	<div>
		<!-ponerle los atributos al table en el css y no en el html porfavor **MANUEL**->
		<table>
			<tr>
				<th>Codigo</th>
				<th>Materia</th>
			</tr>
			<?php
				/*Poner aqui el codigo de php para ir jalando el resto de la tabla desde la base de datos, con un foreach del select respectivo del usuario (supongo) **MANUEL** */
			?>
		</table>
	</div>
	
</body>
</html>
