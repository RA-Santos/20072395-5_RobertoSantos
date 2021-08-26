<?php
	include('dados/dados.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="icon" href="images/favicon.png" />
	<meta charset="utf-8">
	

	<title><?=$TipoNeg["contato"];?></title>
	


	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<header class="main_header">
		<div class="main_header_content">
			<a href="#" class="logo"><img src="images/favicon.png" height="100" alt="Doceria Artesanal Doces Gourmet" title="Doceria Artesanal Doces Gourmet">
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
        <article>
				<header>
					<h2 class="Empresa">Doceria Artesanal Doces Gourmet</h2>
				</header>
                <p><?php echo substr($dados[1]["description"],0, 550);?>
                <img src="images/whatsapp.png" height="30" alt="whatsapp icon" title="whatsapp icon">
                    </br>
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <input type="text" placeholder="seu texto">
                    <button>ENVIAR</button>
                </form>

			</article>
			<article class="main_prod_content">
                <div class="main_prod_content_spacer">
					<header>
						<h1>Doceria Artesanal Doces Gourmet</h1>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7321.90869766492!2d-51.930586958318415!3d-23.426016192241203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1629923525524!5m2!1spt-BR!2sbr" width="1100" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						
					</header>

				</div>
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