<?php
	include('dados/dados.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="icon" href="images/favicon.png" />
	<meta charset="utf-8">
	

	<title><?=$TipoNeg["produtos"];?></title>
	


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
				<li><a href="#">Produtos</a></li>
				<li><a href="Contato.php">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<main>

		<div class="main_cta_prod">
			<article class="main_cta_content">
                <div class="main_cta_content_spacer">
					<header>
					</header>
				</div>
            </article>
        </div>
		<section class="main_blog">
			<header class="main_blog_header">
				<h1>Doceria Doces Gourmet - Conheça nossos produtos:</h1>
			</header>

			<article>
				<header>
					<h2><a href="prod1.php" class="category"><?=$produtos[0]["title"];?><!--Panini-->
					</a></h2>
				</header>
				<a href="prod1.php">
                    <img src="images/panini2.jpg" height="200" alt="panini" title="panini">
                </a>
				<p><?php echo substr($produtos[0]["description"],0, 150);?>...<!--Os éclairs são uma das sobremesas...--></p>
			</article>


			<article>
				<header>
					<h2><a href="prod2.php" class="category"><?=$produtos[1]["title"];?><!--Brigadeiro gourmet--></a></h2>
				</header>
				<a href="prod2.php">
                    <img src="images/gourmet.jpg" height="200" alt="brigadeiro gourmet" title="brigadeiro gourmet">
                </a>
				<p><?php echo substr($produtos[1]["description"],0, 150);?>...<!-- Cremoso e com intenso sabor de chocolate... --></p>
			</article>


			<article>
				<header>
					<h2><a href="prod3.php" class="category"><?=$produtos[2]["title"];?></a></h2>
					<a href="prod3.php">
                    <img src="images/camafeun.jpg" height="200" alt="Camafeu de nozes" title="Camafeu de nozes">
                </a>
					<p><?php echo substr($produtos[2]["description"],0, 150);?>...<!--É um doce fino e tradicional presente em muitas festas...--></p>
				</header>
			</article>


			<article>
				<header>
					<h2><a href="prod4.php" class="category"><?=$produtos[3]["title"];?></a></h2>
					<a href="prod4.php">
                    <img src="images/copos-chocolate.png" height="200" alt="Copinhos de chocolate recheados" title="Copinhos de chocolate recheados">
                </a>
					<p><?php echo substr($produtos[3]["description"],0, 150);?>...<!--Elaborados com fino chocolate, proporcionando sabor marcante...--></p>
				</header>
			</article>



		</section>
	

		<article class="main_optin">
            <div class="main_optin_content">
                <header>
                    <h1>Quer receber nossas novidades em seu e-mail?</h1>
                    <p>Preencha os campos ao lado e clique em "ENVIAR"</p>
                </header>
                <form>
                    <input type="text" placeholder="Seu nome">
                    <input type="email" placeholder="Seu e-mail">
                    <button>ENVIAR</button>
                </form>
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


    </section>
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