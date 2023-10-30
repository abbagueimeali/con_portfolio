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
</head>

<body>
	<style type="text/css">
	

	</style>


	
	
			<?php 
					//inclure la navbar
					include ("navbar.php");
			?>
	
	

	<div class='container'>
		<h1>Nos projets réalisés</h1>

        <div class="card">
            <div class="card-header">
                <h6>Liste des nos projets réalisés</h6>
            </div>

            <div class="card-body">

                
                <table class="table table-bordered boostrap-datatable">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Théme</th>
                            <th>Entreprise</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                       
                            <tr>
                                <td>1
                                <td>Gestion d'un application de Mobile money</td>
                                <td>MTN CAMEROON</td> 
                                <td><a href="voir_projet.php?id=1">Afficher</a> </td>
                            </tr>

                            <tr>
                                <td>2
                                <td>Application de gestion des cours en ligne</td>
                                <td>Université de Garoua</td> 
                                <td><a href="voir_projet.php?id=2">Afficher</a> </td>
                            </tr>
                           
                    </tbody>

                </table>
                
            
            </div>
        </div>
	</div>



</body>


</html>