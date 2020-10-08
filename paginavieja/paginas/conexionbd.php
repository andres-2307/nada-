<?php 
$db_host="localhost"; 
$db_usuario="id13793204_luis43"; 
$db_password="?*<i~2^O2IL=MLpL"; 
$db_nombre="id13793204_bd"; 
$conexiones = mysqli_connect($db_host,$db_usuario,$db_password); 
$db = mysqli_select_db($conexiones,$db_nombre) or die ("Problemas al insertar".mysqli_error($conexiones)); 
?> 

