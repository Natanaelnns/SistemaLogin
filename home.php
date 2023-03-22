<?php
//Conexão com o banco de dados
require_once 'db_connect.php';

//Sessão
session_start();

//verificação
if(!isset($_SESSION['logado'])):
	header('location: index.php');
endif;

//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
?>

<html>
	<head>
		<title>Página restrita</title>
		<meta charset="utf-8"/>
	</head>
	<body>
			<h1>Olá <?php echo $dados['nome'] ?> </h1>
	</body>
	</html>