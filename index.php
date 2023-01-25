<?php
echo " Trabajo fin de grado de Emilio Moreno. Centro Ana Sanz de Pamplona. Curso 2022-2023";
?>

<?php 
$ip = $_SERVER['REMOTE_ADDR'];
/*FUNCIÓN QUE RECOGE LA IP DEL USUARIO QUE NAVEGA EN ESTA PÁGINA*/

if ( $ip==67.88.123.45 ) { ?>
<h1>ERES UN PESADO LARGO DE MI WEB</h1>
/*Si la ip es la del usuario pesado le muestro en pantalla este título*/              
<?php } ?>

<?php else { ?>
<h1>BIENVENIDO A MI WEB</h1>
/*si la ip del usuario no es la del pesado, le muestro este otro título*/
<?php } ?>