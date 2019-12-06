<?php
	//session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../../Public/css/main.css">
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		ul li{
			background: skyblue;	
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		ul #config:hover{
			background: blue;
		}
		.popup-dialog{
			display: none;
		}
		.popup-design ul{
			width: 100%;
			list-style-type: none;
			float: left;
		}
		.popup-design ul li {
			margin: 8px;
		}
		.popup-design a{
			
			width: 100%;
			padding-top: 15px;
			padding-bottom: 15px;
		}
		.home-admin{
			width: 80%;
			margin: 0 auto;

		}
		.home-admin1{
			width: 100%;
			margin: 0 auto;

		}
		.home-admin ul{
			list-style-type: none;

		}
		.home-admin ul li{
			display: inline;
			margin: 10px;
			width: 30%;
			float: left;
			padding: 15px;
		}


	</style>
</head>
<body>
<header style="width: 100%; height: 100px; float: left;">
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top home-admin1">
    <a class="navbar-brand" href="#" style="font-size: 24px;">Universite Panafricaine<br> du Congo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<div style="width: 100%;  margin: 0 auto;">
			<span style="border: none;"><img src="<?php echo WEBROOT ."Public/";?>" style="background: #fff; float: right; height: 60px; border: none;width: 60px; border-radius: 60px;"></span>
				<a href="<?php echo WEBROOT; ?>" class="btn btn-success nav-link" 
					style="width: 20%;float: right;margin-top: 10px;margin-right: 10px;border: 2px solid #fff;">Page d'accueil</a>
		</div>

        
    </div>
</nav>
	</header>
	<section style="width: 100%; height: auto; float: left;">
		<article>
			
			<div class="home-admin">
				<ul>
					<li id="config" class="btn btn-secondary">Configurer les compte OPERATEUR</li>
					<li id="modify" class="btn btn-danger">
						<a href="<?php echo WEBROOT ."Home/modify/create"; ?>" style="color: #fff; text-decoration: none;">Modification de compte ETUDIANT</a></li>
					<li class="btn btn-primary">Rapport</li>
				</ul>
			</div>
		</article>
		<article class="popup-dialog" id="config-displ" style=" margin-top: 40px;">
			<div class="popup-design" style="width: 40%; margin: 0 auto; ">
				<ul style="display: block; ">
					<li>
						<a href="<?php echo WEBROOT ."Home/add"; ?>" class="btn btn-primary">Appariteur</a>
					</li>
					<li>
						<a href="<?php echo WEBROOT ."Admin/add"; ?>" class="btn btn-success">Administrateur CHEF TECHN</a>
					</li>
					<li>
						<a href="<?php echo WEBROOT ."Admin/bureau"; ?>" class="btn btn-secondary">Chef des BUREAUX</a>
					</li>
					<li>
						<a href="" class="btn btn-warning">Agenda</a>
					</li>
				</ul>
			</div>
		</article>
	</section>
	<footer>
		
	</footer>

		<script type="text/javascript">
			window.onload = () => {
				//alert("Hello");
				document.getElementById('config').addEventListener('click', () => {
					document.getElementById('config-displ').style.display ="block";
				});
				// document.getElementById('modify').addEventListener('click', () => {

				// });
			};
		</script>
</body>
</html>