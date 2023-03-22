<?php
//Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$senha="";
$db_connect="sistemalogin";

$connect = mysqli_connect($servername, $username, $senha, $db_connect);

if(mysqli_connect_error()):
	echo "Falha na conexão: ".mysqli_connect_error();
endif;


?>