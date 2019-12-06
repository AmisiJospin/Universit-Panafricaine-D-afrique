<?php
	//session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajouter les membres des staff</title>
	<link rel="stylesheet" type="text/css" href="../../Public/css/admin.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">
	<style>
		#back{
			cursor: pointer;
			padding: 5px;
			border-radius: 5px;
		}
		#back:hover{
			color: #fff;			
			background: #ccc;

			
		}
		#second-info{
			display: none;
		}
		.left{
			float: left;
			width: 45%;
		}
		.right{
			float: right;
			width: 45%;
		}
		#first-info{
			display: block;
		}
		.home-admin{
			width: 100%;
			margin: 0 auto;
			float: left;
		

		}

	
	</style>

</head>
<body style="width: 100%;padding: 0px;">
	<header style="width: 100%; height: 100px;float: left;">
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top home-admin">
    <a class="navbar-brand" href="#" style="font-size: 24px;">Universite Panafricaine<br> du Congo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<div style="width: 80%;  margin: 0 auto;l">
						<a href="<?php echo WEBROOT ."Home/home"; ?>" class="btn btn-success nav-link" 
						style="width: 20%;float: right;border: 2px solid #fff;">Home</a>
		</div>
        
    </div>
</nav>
	</header>
	<section style="width: 100%; float:left; height: auto;">
		<article style="width: 40%; margin: 0 auto;">
			<div>
				<?php

						$split_ = explode("/",  $_SERVER['REQUEST_URI']);
	                    $split_ =  array_slice($split_, 2);
	                    $controller_1 = $split_[0];
	                    $action_1 = $split_[1];

	                    if((($controller_1 == "Home") && ($action_1 == "add"))){
	                    	# Code...
	                    	$poste = "Appariteur" ;
	                    	$act = "create";
	                    }
	                     elseif ((($controller_1 == "Admin") && ($action_1 == "add"))) {
	                     	# code...
	                     	$poste = "Administratuer CHEF TECHNIQUE";
	                     	$act = "create";
	                     }
	                     elseif ((($controller_1 == "Admin") && ($action_1 == "bureau"))) {
	                     	# code...
	                     	$poste = "Chef de BUREAUX";
	                     	$act = "create";
	                     }
				 ?>

				<form action="<?php echo "/Panafricain/". $controller_1 ."/". $act; ?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
					<div id="first-info">
						<div style="width: 100%; float: left;">
						<div class="left">
							<div>
								<label for="firstname">Nom </label><br>
								<input type="text" name="firstname" class="form-control" placeholder="Entrer votre nom">	
							</div>
							<div>
								<label for="secondname">Post Nom </label><br>
								<input type="text" name="secondname" class="form-control" placeholder="Entrer votre postnom"><br>	
							</div>
							<div>
								<label for="lastname">Pre Nom </label><br>
								<input type="text" name="lastname" class="form-control" placeholder="Entrer votre prenom"><br>	
							</div>
						</div>
						<div class="right">
							<div>
								<label for="email">Address Email </label><br>
								<input type="email" name="email" class="form-control" placeholder="Entrer votre address email">	
							</div>
							<div>
								<label for="contact">Contact </label><br>
								<input type="text" name="contact" class="form-control" placeholder="Entrer numero de telephone"><br>	
							</div>	
							<div>
								<label for="profile">Photo de profile </label><br>
								<input type="file" name="profile" ><br>	
							</div>	
						</div>			
						
						<div class="divider" style="width: 100%;float: left;">
							<hr style="height: 3px; width: 100%; float:left;">
							<div class="left">
								<div style="">
									<label for="instutition">Instutition </label><br>
									<input type="text" name="instutition" class="form-control" placeholder="Entrer le nom d'instutition">
								</div>
								<div>
									<label for="division">Division </label><br>
									<input type="text" name="division" class="form-control" placeholder="Entrer le division"><br>	
								</div>	
							</div>
							<div class="right">
								<div>
									<label for="matricule">Numero Matricule </label><br>
									<input type="number" name="matricule" class="form-control" placeholder="Entrer le numero matricule">	
								</div>
								<div>
									<label for="bureau">Bureau </label><br>
									<input type="text" name="bureau" class="form-control" placeholder="Entrer votre nom du bureau">	
								</div>
							</div>
							<div style="margin-top: 2px; width: 100%; float:left;">
								<button type="button" id="continue" style="width: 100%;cursor: pointer; " class="btn btn-primary">Continuer >>>> </button>
							</div>
						</div>
					</div>	
					</div>							
					<div style="width: 100%; float:left;" id="second-info">					
						<div class="second-info" >					
							<div>
								<label for="affectation">Affectation </label><br>
								<input type="text" name="affectation" class="form-control" placeholder="Entrer l'affectation"><br>	
							</div>						
							<div>
								<label for="poste">Poste </label><br>
								<input type="text" name="poste" class="form-control" placeholder="Entrer le poste d'occupation" value="<?php echo $poste; ?>">	
							</div>					
							<div>
								<label for="password">Mot de passe </label><br>
								<input type="password" name="password" class="form-control" placeholder="Entrer mot de passe"><br>	
							</div>
							<div>
								<label for="password">Confirmer le mot de passe </label><br>
								<input type="password" name="password" class="form-control" placeholder="Entrer mot de passe"><br>	
							</div>
						<div style="width: 100%; float:left;">
							<button type="submit" style="width: 100%;cursor: pointer; " class="btn btn-success">Creer le compte</button>
						</div>
						<div style="width: 100%; float: left; margin-top: 10px;">
							<span class="text-secondary" id="back" style=" font-size: 22px;"> << Back</span>
						</div>
						</div>
					</div>

					</div>
				</form>
			</div>
		</article>
		
	</section>
	<footer>
		
	</footer>
	<script>
		window.onload = () => {
			var firstInfo = document.getElementById("first-info");
			var secondInfo = document.getElementById("second-info");
			document.getElementById("continue").addEventListener("click", () => {
					secondInfo.style.display = "block";
					firstInfo.style.display = "none";
				
				
		});
			document.getElementById("back").addEventListener("click", () => {
				secondInfo.style.display = "none";
				firstInfo.style.display = "block";
			});
	};
	</script>

</body>
</html>