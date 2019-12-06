<?php
	//session_start();
	if( isset($_SESSION['member_id'])){
		header("Location: ". WEBROOT ."Home/home");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		
		.home-admin1{
			width: 100%;
			margin: 0 auto;
			float: left;

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
		<div style="width: 80%;  margin: 0 auto;l">
						<a href="<?php echo WEBROOT; ?>" class="btn btn-success nav-link" 
						style="width: 20%;float: right;border: 2px solid #fff;">Home</a>
		</div>
        
    </div>
</nav>
	<section style=" width:100%; float: left; margin: 100px auto;">
		<article>
			<div style="margin-top: 20px;">
				<form action="login" method="POST">
					<div class="card" style="width: 45%;padding: 20px; margin: 0 auto;">
					<h1 style="text-align: center;">	Login   </h1>		
						<div class="form-group">
							<label for="username">Nom d'utilisateur ou Email</label><br>
							<input type="text" name="username" class="form-control" placeholder="Entrer votre nom d'utilisateur">	
						</div>
						<div>
							<label for="password">Mot de passe</label><br>
							<input type="text" name="password" class="form-control" placeholder="Entrer mot de passe"><br>	
						</div>
						<div>
							<button type="submit" style="width: 100%;" class="btn btn-success">Connection</button>
						</div>
					</div>
					
				</form>
			</div>
		</article>
	</section>
	<footer>
		
	</footer>

</body>
</html>