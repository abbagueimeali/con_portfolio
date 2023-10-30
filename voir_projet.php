<!DOCTYPE html>
<html>
<head>
	<title>Nos projets réalisés</title>
	<title>Concours Portfolio</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/toastr/toastr.min.css">

	<!--Cropper-->
	<link rel="stylesheet" type="text/css" href="cropper/css/cropper.css">
	<link rel="stylesheet" type="text/css" href="cropper/css/main.css">

	<!--Icons-->
	<link rel="stylesheet" type="text/css" href="font-awesome/icons/font-awesome.min.css">

	<!--Callout-->
	<link rel="stylesheet" type="text/css" href="css/callout/callout.css">

    <!--DataTable-->
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.css">

    <!-- sweetalert-->
    <link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
    
</head>

<body>
	<style type="text/css">
	

	</style>


	<?php
		if(isset($_GET['id']))
		{

            if($_GET['id']==1){

                $theme = "Gestion d'un application de Mobile money";
                $entreprise = "MTN CAMEROON";
                $debut = "02-01-2000";
                $fin = "03-03-2000";

            }elseif($_GET['id']==2){

                $theme = "Application de gestion des cours en ligne";
                $entreprise = "Université de Garoua";
                $debut = "06-04-2000";
                $fin = "07-05-2000";

            }else{

                $theme = "";
                $entreprise = "";
                $debut = "";
                $fin = "";
            }

			

	?>
	
			<?php 
					//inclure la navbar
					include ("navbar.php");
			?>
	
	

	<div class='container'>

        <div class="card">
            <div class="card-header">
                <h5>Détail du projet : <?= $theme; ?></h3>
            </div>
            <div class="card-body">


                <div class="row">
                    <div class="col-md-6">
                        <div class="bs-callout bs-callout-success">
                            <div class="row">
                                <div class="col-md-5">Théme</div>
                                <div class="col-md-2">:</div>
                                <div class="col-md-5"><?= $theme; ?></div>   
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5">Entreprise</div>
                                <div class="col-md-2">:</div>
                                <div class="col-md-5"><?= $entreprise; ?></div>   
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bs-callout bs-callout-success">
                            <div class="row">
                                <div class="col-md-5">Date de début</div>
                                <div class="col-md-2">:</div>
                                <div class="col-md-5"><?= $debut; ?></div>   
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-5">Date de fin</div>
                                <div class="col-md-2">:</div>
                                <div class="col-md-5"><?= $fin; ?></div>   
                            </div>
                        </div>
                    </div>
                </div>

                
                
            </div>
        </div>

        
	</div>


   
</body>

<?php
		}
		else
		{
			header('location:index.php');
		}
?>
</html>