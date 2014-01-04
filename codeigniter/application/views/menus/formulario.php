<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Mi menu facil</title>

	</head>

	<body>

		<h1>mi menu</h1>
		
		<?= form_open("/menu/actualizar/") ?>

				<?php
					$area =  array(
						'name' => 'area' , 
						'placeholder' => 'Escribe tu trabajo'
					 );

					$comida = array(
						'name' => 'comida',
						'placeholder' => 'Escribe tu comida' 
						);

					$cantidad = array(
						'name' => 'cantidad' ,
					'placeholder' => 'numero de comidas' 
					);
				?>
				<?= form_label('Area de trabajo:', 'area') ?>
					
					<?= form_input($area) ?>
				
			<br><br>
				<?= form_label('Tipo de comida:', 'comida') ?>
					
					<?= form_input($comida) ?>
			<br><br>
				<?= form_label('Cantidad:', 'cantidad') ?>
					
					<?= form_input($cantidad) ?>
				
				<!--<?= form_submit('','Registrar admin') ?> -->

				<?= form_submit('','Actualizar') ?>

		<?= form_close() ?>

		

	</body>

</html>