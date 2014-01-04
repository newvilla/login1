<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Resultado de consulta</title>
</head>

<body>
	<?php

if($areas){
	
	foreach ($areas->result() as $v) {
				echo $v->areapedidos;

			} 	
		
	
	 
}
else{

	echo "No existe el area";
	
}
			?>

</body>

</html>