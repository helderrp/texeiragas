<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>//Função Javascrip que atualiza a lista de rss da pagina a cada 10 segundo. Existe um rand dentro do foreach que testa.
	$(document).ready(function(){setInterval(function(){$("#materia").load("?secao=conteudo&rss=<?=$_GET['rss']?> #materia");
			}, 10000);
		});
</script>
	      	
<?php
	//Verifica se o Post é vazio, se sim seta uma pagina como inicial
	if(empty($_GET['rss'])){
		$feed = "http://www.r7.com//blogs/rss/noticias";
		$cont = "Noticias do R7";
	}else{//se não recebe o Post normalmente.
		$feed = $_GET['rss'];
		$cont = $_GET['cont'];
	}
	//permitir url externas
	ini_set('allow_url_fopen',1);
	ini_set('allow_url_include',1);
	
	//executa leitura do feed
	$rss = simplexml_load_file($feed);

	//Quantidade de matérias dispostas na página	
	$limite = 6;
	$count = 0;
?>
<div id="noticias" class="box_home" style="width:800px; padding-left:100px;">
	<div id="titulo"><?=$cont?></div>            
	<div id="materia">
<?php //se houver uma rss ela varre a variavel, imprimindo o link e titulo
	if($rss){
		foreach($rss->channel->item as $item){ 
			//echo rand(); //verificador de refresh
			echo "<ul><li><img src='imagens/rss.png'>&nbsp;&nbsp;&nbsp;&nbsp;<a href='$item->link' title=$item->title>$item->title</a></li></ul>";                  
			$count++;
			if($count == $limite)break;
		}
	}else{
		echo "Rss com problema!!!";
	}
?>
	</div>
</div>

