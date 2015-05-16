<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Sitio de Don JL para móviles</title>
	<link rel="stylesheet" href="lungo.css">
	<link rel="stylesheet" href="lungo.icon.css">
	<link rel="stylesheet" href="lungo.theme.css">
</head>
<body>

<aside id="settings">
	<header data-title=" M E N Ú "></header>
	<article class="active indented">
		<ul>
			<li>
				<button  class="anchor" data-label="YO" data-view-article="main-article" data-title="Yo"></button>
			</li>
			<li>
				<button  class="anchor" data-label="Elsa Aguirre" data-view-article="art-2" data-title=" Elsa A."></a>
			</li>
		</ul>
	</article>
</aside>

<section id="entrada" transition="cover">
	<article class="splash"><br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> 
		<button data-view-section="main_section" data-label="B I E N V E N I D O " data-icon="user"></button>
	</article>
</section>


<section id="main_section" data-aside="settings" data-transition="cover">
	<header data-back="arrow-left"  data-title="LUNGO de Don JL">
		<nav class="on-left">
			<button data-view-aside="settings" data-icon="menu"></button>
		</nav>
		<nav class="on-right">
			<button data-view-section="secc-2" data-icon="arrow-right"></button>			
		</nav>
	</header>

	<article id="main-article" class="list scroll active indented" data-transistion="cover">
	  <ul>
	  <li class="dark"><center>
    	<strong>EL GALAN YO DON JL</strong><br />
    	<img src="donjl.png" width="80%">
    	</center>
      </li>
  </ul>
	</article>

	<article id="art-2" class="list scroll indented"><center>		
    	<strong>LA NIÑA ELSA AGUIRRE</strong>
    	<img src="elsa.jpg" width="80%"> 
    </center>
	</article>

	<footer>
		<nav>
			<a href="#" data-view-article="main-article" data-icon="arrow-left" class="active" data-title="EL GALAN YO DON JL"></a>
			<a href="#" data-view-article="art-2" data-icon="arrow-right" data-title="Artículo 2"></a>
		</nav>
	</footer>
</section>

<section id="secc-2" data-transition="cover">
	<header data-title="Sección II"  data-back="arrow-left"></header>
	<article id="Art1-2" class="active indented ">
		Artículo 1 en sección Dos
	</article>
	<footer>
		<nav>
			.
		</nav>
	</footer>
</section>


<script src="quo.js"></script>
<script src="lungo.js"></script>
<script>
Lungo.init({
	name: "Mi primera app",
	version: "0.0.1"
});
</script>
</body>
</html>