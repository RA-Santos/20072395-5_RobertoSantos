<?php
	include('dados/dados.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="icon" href="images/favicon.png" />
	<meta charset="utf-8">
	

	<title><?=$TipoNeg["sobrenos"];?></title>
	


	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="main_header">
		<div class="main_header_content">
			<a href="#" class="logo"><img src="images/favicon.png" height="100" alt="Doces Gourmet Artesanais" title="Doces Gourmet Artesanais">
			</a>
			<nav class="main_header_content_menu">
				<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="QuemSomos.php">Quem somos</a></li>
				<li><a href="produtos.php">Produtos</a></li>
				<li><a href="Contato.php">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<main>

		<div class="main_prod">
			<article class="main_prod_content">
                <div class="main_prod_content_spacer">
					<header>
						<h1>Doceria Doces Gourmet</h1>
						<img src='images/confeiteiro.jpg' height="400" width="1000" alt="Quem somos" title="Quem somos"> 
					</header>

				</div>
            </article>

			<article>
				<header>
					<h2 class="Empresa">Doceria Artesanal Doces Gourmet</h2>
				</header>
                <p><?php echo substr($dados[0]["description"],0, 550);?>
				</br>
				
				</br>
			</article>
        
	</main>
 	<section>
        <header>
            <h1></h1>
        </header>

		<article>
            <header>
                <h2>Nossas Páginas</h2>
            </header>
            <ul>
			<li><a href="index.php">Home</a></li>
				<li><a href="QuemSomos.php">Quem somos</a></li>
				<li><a href="prod1.php">Éclairs</a></li>
				<li><a href="prod2.php">Brigadeiro gourmet</a></li>
				<li><a href="prod3.php">Camafeu</a></li>
				<li><a href="prod4.php">Copinhos de chocolate</a></li>
				<li><a href="Contato.php">Contato</a></li>
            </ul>
			<br>
        </article>
</br>

    <footer>
		<h2>MAPA</h2>
		<p>Disciplina: Programação Back-End I</p>
		<p>Professor: Rafael Florindo</p>
		<p>Módulo 53/2021</p>
		<p>Aluno: Roberto Alves dos Santos</p>
		<p>R.A. 20072395-5</p>
	</footer>
</body>
</html>