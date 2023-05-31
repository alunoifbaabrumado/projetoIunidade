<?php

    require "dados.php";

    $i = $_GET["i"];

    if(!isset($_GET["i"])){
        header("location: index.php");
        die;
    }

    if(isset($filmes[$i])){
        $f = $filmes[$i];
    }

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
	<div class="container-detalhe">
		
		<div class="filme">
            <?php if(isset($f)){ ?>
			<img src="<?=$f["foto"]?>" alt="<?=$f["nome"]?>">
			<h3><?=$f["nome"]?></h3>
            <p>Gênero: <?=$f["genero"]?> </p>
			<p>Horário de exibição: <?=$f["horario"]?></p>
            <p>Local: <?=$f["local"]?> </p>
			<p>Duração do filme: <?=$f["duracao"]?> </p>
            <p>Ano de lançamento: <?=$f["ano"]?> </p>
			<p>Descrição: <?=$f["descricao"]?> </p>
            <?php
                }else{
                    echo "<h3>Esse filme não está sendo exibido</h3>";
                }
            ?>
			<a href="index.php" class="link">Voltar</a>
		</div>
			
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
