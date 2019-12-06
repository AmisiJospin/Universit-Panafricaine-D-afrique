<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">
	<style>
		.home-admin{
			width: 100%;
			margin: 0 auto;
		

		}
		.home-admin ul{
			
			list-style-type: none;

		}
		.home-admin ul li{
			display: inline;
			margin: 10px;
			width: 15%;
			float: left;
			padding: 12px;
		}
		.home-admin ul li a:hover{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<header>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top home-admin">
    <a class="navbar-brand" href="#" style="font-size: 24px;">Universite Panafricaine<br> du Congo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
			<a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a></li>
			<li><a href="" class="nav-link">Inscription</a></li>
			<li><a href="" class="nav-link">Assurance Maladi</a></li>
			<li><a href="" class="nav-link">Service Academique</a></li>
			<li><a href="" class="nav-link">Encadrement Divers</a></li>
			<li><a href="Login/index" class="nav-link">Apparitora</a></li>
			<li><a href="" class="nav-link">Securite</a></li>
               
            </li>
        </ul>
    </div>
</nav>

		<!-- <nav style="height: 80px;background-color: #ccc;" >
			<div class="home-admin">
				<ul>
					
				</ul>
			</div>			
		</nav> -->
		
	</header>
	<section>
		<?php //echo $content_for_layout; ?>
		
	</section>
	<footer>
		
	</footer>

</body>
</html>