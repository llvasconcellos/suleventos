<?php
include("includes/funcoes.php");
?>
<html>
	<head>
		<title>centuryeventos.com.br</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link href="includes/estilo.css" rel="stylesheet" rev="stylesheet">
	</head>
	<body>
		<table width="100%" height="100%" border="0">
			<tr>
				<td align="center" valign="top">
					<table width="770" border="0" cellpadding="0" cellspacing="5">
						<tr>
							<td width="157" height="139"><img src="imagens/camera.jpg"></td>
							<td colspan="2" align="left" valign="top">
								<?php constroi_menu_cabecalho(); ?>
							</td>
						</tr>
						<tr>
							<td align="left" valign="top" height="100%">
								<?php constroi_tabela_esq(-1); ?>
							</td>
							<td align="left" valign="top" bgcolor="#E6E6E6" class="conteudo" width="470">
								<?php constroi_form_busca(); ?>
								
								<hr>
								<?
								require("includes/conectar_mysql.php");
								$query = "SELECT conteudo FROM textos WHERE nome='home'";
								$result = mysql_query($query) or die("Erro de conex�o ao banco de dados: " . mysql_error());
								$text = mysql_fetch_row($result);
								require("includes/desconectar_mysql.php");
								echo('<p>' . $text[0] . '</p>');
								?>
								<hr size="8" align="center" color="#FD9800">
								<div class="titulosecao"><img align="bottom" src="imagens/bullet_red.gif">&nbsp;Eventos Recentes</div><br>
								<? constroi_destaque_eventos(6, 3); ?>
								<br>
								<DIV class="menurodape" style="width: 100%; text-align:right;"><a class="menurodape" href="<?=$eventos?>">[EVENTOS]</a></DIV>
								<hr size="8" align="center" color="#FD9800">
								<? constroi_dicas_destaque(); ?>
								<? constroi_banner(); ?>
							</td>
							<td width="140" align="right" valign="top" bgcolor="#001238">
								<? constroi_parceiro_em_destaque(); ?>
							  <font style="font-size:2px;"><br></font>
							  	<? constroi_outros_eventos(10); ?>
							</td>
						</tr>
						<tr>
							<td colspan="3" height="70" valign="bottom">
								<?php constroi_rodape(); ?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>
