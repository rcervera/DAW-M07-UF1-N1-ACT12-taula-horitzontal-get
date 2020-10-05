<?php

	// No es passa el paràmetre
	if(!isset($_GET['final']))
	{
		echo "Has de passar en la url la variable ?final=valor";
		exit;
	}

	$final = $_GET['final'];

	// El paràmetre no té assignat un valor
	if($final=="") {
		echo "La variable final ha de tenir un valor";
		exit;
	}

	// El valor no és un número
	if(is_numeric($final)===FALSE) {
		echo "El valor és incorrecte";
		exit;
	}

	if($final<1 || $final>100) {
		echo "El valor ha der ser un número entre 1 i 100";
		exit;
	}
?>

<table border=1>
<tr>
<?php	   
	for($i=1;$i<=$final;$i++) {
		echo "<td>$i</td>";
	}	  
?>
</tr>
</table>

