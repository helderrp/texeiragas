<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/estilosite.css" type="text/css" />
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<link href="vendor/bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="vendor/bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="vendor/bootstrap-3.2.0-dist/css/bootstrap-theme.css" rel="stylesheet" media="screen">
<link href="vendor/bootstrap-3.2.0-dist/css/bootstrap-theme.css.map" rel="stylesheet" media="screen">
<link href="vendor/bootstrap-3.2.0-dist/css/bootstrap-theme.css.map" rel="stylesheet" media="screen">



<title>Teixeira Gás</title>

</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="vendor/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
        <center>
        	<div id="topo"><!-- INCLUI O TOPO !-->
            	<?php include("includes/topo.php");?>
            </div>
            <div id="conteudo_central">    
                <?php
					include_once("class/verurl.php");//FAZ A INCUSÃO DA CLASS VER URL
					include("includes/menu.php");//FAZ A INCLUSÃO DO MENU
                	$red = new verurl();//INSTANCIA A CLASSE VER URL
					@$red->trocarUrl($_GET['secao']);//EXECUTA A MONTAGEM DA URL
				?>               
            </div>
            <div id="rodape"><?php include("includes/rodape.php");?></div><!-- INCLUI O RODAPE !-->
        </center>
</body>
</html>
