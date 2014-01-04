<!DOCTYPE html>

<html>

<head>
	<meta>
	<title>mi login</title>
</head>

<body>
	<h1>El propio login</h1>
	<?= form_open('login/verificar'); ?>

		<?php
					$usuario =  array(
						'name' => 'usuario' , 
						'placeholder' => 'digite usuario'
					 );

					$clave = array(
						'name' => 'clave',
						'placeholder' => 'digite su clave' 
						);

		?>
				<?= form_label('Usurio:', 'usuario') ?>
					
					<?= form_input($usuario) ?>
				
			<br><br>
				<?= form_label('Password:', 'clave') ?>
					
					<?= form_input($clave) ?>
			<br><br>
															
				<?= form_submit('','Ingresar') ?>

	<?= form_close(); ?>

</body>

</html>