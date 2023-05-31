
<?php
    
    require "dados.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
	<title>Ingressos de Filme</title>
	<link rel="stylesheet" type="text/css" href="filmes.css">
</head>
<body>
    <header>
		<img src="imagens/ingresso.jpg" class="img-topo">
        <h1>Filmes em exibição</h1>
		<div id="user">
		<img src="imagens/user.jpg" class="img-topo">
		<h3>Usuário</h3>
		</div>
		<div id="duv">
		<img src="imagens/duvidas.jpg" class="img-topo">
		<h3>Dúvidas</h3>
		</div>
    </header>
	<div class="container">
		
		<?php foreach($filmes as $i => $f){ ?>
		<div class="filme">
            <a href="filme.php?i=<?=$i?>">
			    <img src=<?=$f["foto"]?> alt=<?=$f["nome"]?>>
            </a>
			<h3><a href="filme.php"><?=$f["nome"]?></a></h3>
		</div>
		<?php } ?>
		
	</div>
	<footer>
		<img src="imagens/apple" class="img-roda">
		<img src="imagens/android" class="img-roda">
		<img src="imagens/face" class="img-roda">
		<img src="imagens/youtube" class="img-roda">
		<img src="imagens/insta" class="img-roda">
		<img src="imagens/atend" class="img-roda">
		
	</footer>
</body>
</html>
