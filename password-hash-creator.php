<?php 


$result = "";
if (isset($_POST["pass"]) && $_POST["pass"] != "")
	$result = "PWD HASH:<br />" . password_hash($_POST["pass"], PASSWORD_DEFAULT);

?>
<html>
	<body>
		<form method="post">
			<input type="text" name="pass" />
			<input type="submit" name="" value="enviar">
		</form>

		<?php echo 	$result; ?>
	</body>
</html>
