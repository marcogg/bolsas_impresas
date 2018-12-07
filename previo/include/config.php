<?php
$db_server = 'localhost';
$db_us = 'bolsasim_AmNet';
$db_pas = ';mn*s+V;FpHn';
$db_db = 'bolsasim_noticias';
$db_conn = @mysql_connect($db_server,$db_us,$db_pas) or die ('Imposible conectarse con el servidor');
$db_bd = @mysql_select_db($db_db,$db_conn) or die ('Imposible comunicarse con la base de datos');

define('RUTA','http://www.bolsas-impresas.com/');
define('DOMINIO','bolsas-impresas.com');
?>