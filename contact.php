<!DOCTYPE html>
<html>
<head>
	<title>Concours Portfolio - Contact</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/toastr/toastr.min.css">
</head>
<body>
	
			<?php 
					//inclure la navbar
					include ("navbar.php");
			?>
	<?php
			setlocale(LC_TIME, 'fr_FR');
			$date = date('Y-m-d');
	?>
	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<div class="card">
					<div class="card-header"><b>Contacter nous !</b></div>
					<div class="card-body">
						  <div class="form-group">
						    <label for="email">Adresse émail</label>
						    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entrer une adresse émail">
						  </div>
						  <div class="form-group">
										<label for="adresse">Message</label>
										<textarea class="form-control" id="message" name="message" rows="4" placeholder="Entrer votre adresse"></textarea>
									</div>

						  
						  <button type="submit" class="btn btn-primary" id="envoyer">Envoyer</button>
					</div>
				</div>
			</div>

			
		</div>
	</div>

	<script type="text/javascript" src="js/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/toastr/toastr.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function()
		{
			
			$('#envoyer').click(function()
				{
					var email = $('#email').val();
					var message = $('#message').val();

					if(email != '')
					{
						$('#email').removeClass('is-invalid');
						if(message != '')
						{
							$('#message').removeClass('is-invalid');
						}
						else
						{
							$('#message').addClass('is-invalid');
							error('Le message ne doit pas être vide!');
						}
					}
					else
					{
						$('#email').addClass('is-invalid');
						error('L\'adresse émail ne doit pas être vide!');
					}

				});

			

			

			

			


			//message toastr d'erreur
			function error(element)
			{
			    toastr.error(element,'Erreur',{
			        "positionClass": "toast-bottom-center",
			        timeOut: 5000,
			        "closeButton": true,
			        "debug": false,
			        "newestOnTop": true,
			        "progressBar": true,
			        "preventDuplicates": true,
			        "onclick": null,
			        "showDuration": "300",
			        "hideDuration": "1000",
			        "extendedTimeOut": "1000",
			        "showEasing": "swing",
			        "hideEasing": "linear",
			        "showMethod": "fadeIn",
			        "hideMethod": "fadeOut",
			        "tapToDismiss": false

			    });
			}

			//message toastr succès 
			function valide(element)
			{
					toastr.success(element,'Validé',{
			        "positionClass": "toast-bottom-center",
			        timeOut: 5000,
			        "closeButton": true,
			        "debug": false,
			        "newestOnTop": true,
			        "progressBar": true,
			        "preventDuplicates": true,
			        "onclick": null,
			        "showDuration": "300",
			        "hideDuration": "1000",
			        "extendedTimeOut": "1000",
			        "showEasing": "swing",
			        "hideEasing": "linear",
			        "showMethod": "fadeIn",
			        "hideMethod": "fadeOut",
			        "tapToDismiss": false

			    });
			}
		});
	</script>
</body>
</html>