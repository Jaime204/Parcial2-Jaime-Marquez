<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$telefonos = array(
    array("nombre" => "Samsung", "Precio" => rand(5000,11000)),
    array("nombre" => "iPhone", "Precio" => rand(6000,12000)),
    array("nombre" => "Xiaomi", "Precio" => rand(6000,9000)),
    array("nombre" => "Oppo", "Precio" => rand(5000,10000)),
    array("nombre" => "Motorola", "Precio" => rand(5000,10000))
);
echo "Precio antes de ordenar:<br>";
foreach ($telefonos as $telefonos) {
    echo "El Precio del " . $telefonos["nombre"] . " es " . $telefonos["Precio"] . "<br>";
}


usort($telefonos, function($a, $b) {
    return $b["Precio"] <=> $a["Precio"];
}
);

echo "<br>Precios después de ordenar:<br>";
foreach ($telefonos as $telefonos) {
    echo "El Precio de " . $telefonos["nombre"] . " es " . $telefonos["Precio"] . "<br>";
}
array_push($telefonos, array ("nombre" => "Huawei", "Precio" => rand(5000,10000)));
array_push($telefonos, array ("nombre" => "Realme", "Precio" => rand(5000,10000)));

	echo "<br>precios después de agregar nuevos telefonos:<br>";
foreach ($telefonos as $telefonos) {
    echo "El Precio de " . $telefonos["nombre"] . " es " . $telefonos["sueldo"] . "<br>";
}
?>

</body>
</html>