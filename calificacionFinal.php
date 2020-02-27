<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CALIFICACIONES DE LOS 5 ALUMNOS</title>
</head>
<body>
<?php  
$calif1= $_POST['calif1'];//se declaran las variables de la pagina anterior
$calif2=$_POST['calif2'];
$calif3=$_POST['calif3'];
$calif4=$_POST['calif4'];
$calif5=$_POST['calif5'];

if ($calif1<=7) {
echo "Reprobado";
}

if ($calif2<=7) {
echo "Reprobado";
}

if ($calif3<=7) {
echo "Reprobado";
}

if ($calif4<=7) {
echo "Reprobado";
}

if ($calif5<=7) {
echo "Reprobado";
}
?> 
</body>
</html>