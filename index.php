
<html>
<head>
	<meta charset="utf-8">
	<title>Numeros Primos</title>
</head><!DOCTYPE html>
<body>
	<form method="post" action="index.php" name="formEsPrimo">
		<input type="text" name="inputNumPrimo" required>
		<br>
		<button type="submit">Ver si es primo</button>
	</form>
</body>
</html>
<?php
$numero = $_POST['inputNumPrimo'];
$contadorPrimo = 0;

for($contador = 1; $contador<=$numero; $contador++){
	if($numero % $contador == 0){
		$contadorPrimo = $contadorPrimo + 1;
	}
}

if($numero == 1 or $contadorPrimo == 2){
	echo "El numero ".$numero." es un numero primo";
}
else{
	echo "El numero ".$numero." NO es un numero primo";
}
?>
