<?php
/*
Creamos 3 varibles en PHP  y luego lo mostramos en el html
*/
$nombre='Thamy Inés';
$fecha=date('d-m-Y');
$hora=date('H:i:s');
$precio=5;
$cantidad=10;
$_edad=15;
$EdaD=25;
define('MINOMBRE',"Thamy Inés");
const OTRONOMBRE='Sofía';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <p>Hola <?=$nombre;?></p>
    <p>Hoy es <?=$fecha;?></p>
    <p>Y son las <?=$hora;?></p>
    <p>El total es <?=$precio + $cantidad; ?></p>

<?php echo 'mi nombre es ' , MINOMBRE, '<br/>' , 'El nombre del alumno es ' , OTRONOMBRE;
?>
</body>
</html>