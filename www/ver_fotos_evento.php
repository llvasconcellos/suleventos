<html>
	<head>
		<title>Ver Fotos</title>
		<link href="includes/estilo.css" rel="stylesheet" rev="stylesheet">
		<script language="javascript1.2" type="text/javascript">
			function muda_foto(img){
				parent.document.getElementById("moldura").src = img;
			}
		</script>
	</head>
	<body bgcolor="transparent" leftmargin="0" bottommargin="0" marginheight="0" marginwidth="0" topmargin="0" rightmargin="0">
	<table><tr>
	<?
	$cd = $_GET["cd"];
	require("includes/conectar_mysql.php");
	$query = "SELECT path, path_thumb from fotos WHERE cd_evento=" . $cd;
	$result = mysql_query($query) or die("Erro de conex�o ao banco de dados: " . mysql_error());
	while ($fotos = mysql_fetch_assoc($result)) echo('<td><a href="javascript: void muda_foto(\'' . $fotos["path"] . '\');"><img border="0" width="120" height="90" src="' . $fotos["path_thumb"] . '"></a></td>');
	require("includes/desconectar_mysql.php");
	?>		
	</tr></table>
	</body>
</html>
