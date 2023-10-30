<!DOCTYPE html>
<html>
<head>
	<title>Concours Portfolio - Accueil</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/toastr/toastr.min.css">

	<!--Cropper-->
	<link rel="stylesheet" type="text/css" href="cropper/css/cropper.css">
	<link rel="stylesheet" type="text/css" href="cropper/css/main.css">

	<!--Icons-->
	<link rel="stylesheet" type="text/css" href="font-awesome/icons/font-awesome.min.css">

	<!--Callout-->
	<link rel="stylesheet" type="text/css" href="css/callout/callout.css">
</head>
<body>
	<style type="text/css">
		.photo-profile
		{
			width: 200px;
		}

		#image
		{
			height: 400px;
		}


	</style>
	
			<?php 
					//inclure la navbar
					include ("navbar.php");
			?>

<div class='container'>
		<div class="row">
			<div class="col-md-4">
				<div class="bs-callout bs-callout-primary text-center">
					<img class="rounded-circle photo-profile" src="profil/0.png">
					<br><br>
					<row class="btn btn-primary" data-toggle="modal" data-target="#modal-profile">Profil</row>
				</div>
			</div>

			<div class="col-md-8">
				<div class="bs-callout bs-callout-success">
					<div class="informations">

						<div class="row">
							<div class="col-md-8">
								Civilité : Monsieur
								<br><br>
								Nom : Abba Gueime
								<br><br>
								Prénom : Ali
								<br><br>
								Date de naissance : 06-11-1997
								<br><br>
								Adresse : Dougoi
								<br><br>
								Adresse Email : abbagueimeali@gmail.com
							</div>
							
						</div>

					</div>

					

					
					

				</div>
			</div>
		</div>
	</div>

	
</body>
</html>