<?php 

$result = "";
if (isset($_POST["pass"]) && $_POST["pass"] != "")
	$result = "<b>PWD HASH:</b><br />" . password_hash($_POST["pass"], PASSWORD_DEFAULT);
?>
<html>
	<body>
		<form method="post">
			<input type="text" name="pass" size="50" placeholder="Escriba contraseña a encriptar">
			<input type="submit" name="" value="enviar">
		</form>
		<div><?php echo $result; ?></div>
	</body>
</html>
