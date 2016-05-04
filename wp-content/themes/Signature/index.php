<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package rets
 * @subpackage Signature
 */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="screen" />
	
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.1.11.3.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script>
		$(function() {
			$('#myModal').on('shown.bs.modal', function () {
				$('#myInput').focus()
			});
		});
	</script>
</head>

<body>
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Subscribe to our mailing list</h4>
		  </div>
		  <div class="modal-body">
			<!-- Begin MailChimp Signup Form -->
			<!--<link href="< ?php echo get_template_directory_uri(); ?>/assets/css/mailchimp-classic-10_7.css" rel="stylesheet" type="text/css">
			< style type="text/css">
				#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
				/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
				   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			< /style>-->
			
				<form action="//rets.us12.list-manage.com/subscribe/post?u=b2f21f8b320e7eea0e11ca760&amp;id=783d7babd4" method="post" id="mc-embedded-subscribe-form" 
					name="mc-embedded-subscribe-form" class="validate form-horizontal" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<div class="col-sm-12" style="color:red"><span class="asterisk">*</span> indicates required</div>
						
						<div class="form-group">
							<label for="mce-EMAIL" class="col-sm-2 control-label">Email <span class="asterisk">*</span></label>
							<div class="col-sm-10">
							  <input type="email" class="form-control required email" id="inputEmail3" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="mce-FNAME" class="col-sm-2 control-label">Prenom</label>
							<div class="col-sm-10">
								<input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME">
							</div>
						</div>
						<div class="form-group">
							<label for="mce-LNAME" class="col-sm-2 control-label">Nom </label>
							<div class="col-sm-10">
								<input type="text" value="" name="LNAME" class="form-control" id="mce-LNAME">
							</div>
						</div>
						<div class="col-sm-12">
							<strong>Champs d'intérêt </strong>
						</div>
						<div class="checkbox">
							<label for="mce-group[2965]-2965-0">
								<input type="checkbox" value="1" name="group[2965][1]" id="mce-group[2965]-2965-0">
								Réseautage
							</label>
						</div>	
						<div class="checkbox">
							<label for="mce-group[2965]-2965-1">
								<input type="checkbox" value="2" name="group[2965][2]" id="mce-group[2965]-2965-1">
								Entreprenariat
							</label>
						</div>					
						<div class="checkbox">	
							<label for="mce-group[2965]-2965-2">
								<input type="checkbox" value="4" name="group[2965][4]" id="mce-group[2965]-2965-2">
								Démarrage d'entreprise
							</label>
						</div>
						<div class="checkbox">
							<label for="mce-group[2965]-2965-3">
								<input type="checkbox" value="8" name="group[2965][8]" id="mce-group[2965]-2965-3">
								Événements organisés par le RETS
							</label>						
						</div>
						<div class="checkbox">
							<label for="mce-group[2965]-2965-4">
								<input type="checkbox" value="16" name="group[2965][16]" id="mce-group[2965]-2965-4">
								Entreprenariat social
							</label>
						</div>
						
						<div class="col-sm-12">
							<strong>Status</strong>
						</div>
						<div class="checkbox">
							<label for="mce-group[2969]-2969-0">
								<input type="checkbox" value="32" name="group[2969][32]" id="mce-group[2969]-2969-0">
								Professionnel
							</label>
						</div>
						<div class="checkbox">
							<input type="checkbox" value="64" name="group[2969][64]" id="mce-group[2969]-2969-1"><label for="mce-group[2969]-2969-1">Étudiant</label>
						</div>

						<div class="checkbox">
							<input type="checkbox" value="128" name="group[2969][128]" id="mce-group[2969]-2969-2"><label for="mce-group[2969]-2969-2">Autre</label>
						</div>

					
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true">
							<input type="text" name="b_b2f21f8b320e7eea0e11ca760_783d7babd4" tabindex="-1" value="">
						</div>
						<div class="clear">						
							<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" >
						</div>
					</div>
				</form>		
			<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/mailchimp-validate.js'></script>
			
			<script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text'; /*
			 * Translated default messages for the $ validation plugin.
			 * Locale: FR
			 */
			$.extend($.validator.messages, {
					required: "Ce champ est requis.",
					remote: "Veuillez remplir ce champ pour continuer.",
					email: "Veuillez entrer une adresse email valide.",
					url: "Veuillez entrer une URL valide.",
					date: "Veuillez entrer une date valide.",
					dateISO: "Veuillez entrer une date valide (ISO).",
					number: "Veuillez entrer un nombre valide.",
					digits: "Veuillez entrer (seulement) une valeur numérique.",
					creditcard: "Veuillez entrer un numéro de carte de crédit valide.",
					equalTo: "Veuillez entrer une nouvelle fois la même valeur.",
					accept: "Veuillez entrer une valeur avec une extension valide.",
					maxlength: $.validator.format("Veuillez ne pas entrer plus de {0} caractères."),
					minlength: $.validator.format("Veuillez entrer au moins {0} caractères."),
					rangelength: $.validator.format("Veuillez entrer entre {0} et {1} caractères."),
					range: $.validator.format("Veuillez entrer une valeur entre {0} et {1}."),
					max: $.validator.format("Veuillez entrer une valeur inférieure ou égale à {0}."),
					min: $.validator.format("Veuillez entrer une valeur supérieure ou égale à {0}.")
			});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
			<!--End mc_embed_signup-->			
		  </div>
		  <div class="modal-footer">
			<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-big-orange" >  <!-- data-dismiss="modal"-->
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>



	<div class="header-default">
		<div class="container-fluid">
			<div class="col-md-12 space-vertical" style="color:white">			
				<div>
					<p style="text-align:center;"><span><a  style="color:#ffffff;font-family:Playball;font-size:72px;" data-url="home" data-action="switchPage">LOGO RETS</a></span></p>
				</div>
			</div>
			<div class="col-md-12;">
					<ul>
						<li class="active"><a href="home"><span style="">ACCUEIL</span></a></li>
						<li><a href="#">ARTICLES</a></li>
						<li><a href="#">CONFERENCE</a></li>
						<li><a href="#"><span style="">EQUIPE</span></a></li>
						<li><a href="about">A PROPOS</a></li>
					</ul>
			</div>
			
			<div class="col-lg-12 space-vertical"><span style="font-weight: bolder;;font-size:60px;color:#ffffff;">PROMOUVOIR L'ENTREPRENEURIAT</span></div>
            <!--<div class="col-md-12" style="color:white;margin-top:50px"><span style=";font-size:15px;color:#ffffff;font-weight: bold;">&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash; LOREM IPSUM DOLOR SIT ADIPISCING ELIT &ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;</span></div>-->
			<div class="col-md-12" style="margin-bottom: 100px;">
				<button type="button" class="btn space-vertical btn-big-orange" data-toggle="modal" data-target="#myModal">DEVENEZ MEMBRE</button>
			</div>
		</div>
	</div>
	
	
	<div class="container">
		<div class="row row-centered">
			<p style="text-align:center;margin-top:40px">
				<span style="font-family:'Open Sans';font-size:40px;color:#343d4d;">
					<b>Bienvenue sur notre site!</b>
				</span>
			</p>
			<div class="col-sm-6 col-centered text-center">
			<p style="text-align:center;">
				<span style="font-family:'Open Sans';font-size:19px;color:#737373;">
					<b>Lorem ipsum dolor sit amet, consect adipiscing elit. Etiam metus libero dapibus mauris. Sed porttitor eros nec orci dignissim fermentum.</b>
				</span>
			</p>
			</div>
		</div>
								
		<div class="row row-centered space-vertical">	
			<div class="col-sm-3 col-centered text-center">
				<div class="mission"></div>
				<span style="font-family:'Open Sans';font-size:19px;color:#6e8697;">Mission</span>
				<p><span style="margin-top: 15px;font-family:'Open Sans';font-size:14px;color:#9da2a7;">Représenter et promouvoir les différents programmes de l’ÉTS au sein d’événements en lien avec l’entrepreneuriat.</span></p>
			</div>
			<div class="col-sm-3 col-centered text-center">
				<div class="vision"></div>
				<span style="font-family:'Open Sans';font-size:19px;color:#6e8697;">Vision</span>
				<p><span style="margin-top: 15px;font-family:'Open Sans';font-size:14px;color:#9da2a7;">Créer un réseau favorisant la communication et les relations entre les différents intervenants du monde de l’entrepreneuriat de l’ÉTS.</span></p>
			</div>
		</div>
	</div>
	
	<div class="first-bar space-vertical">
		<div class="col-md-12" style="padding-top:40px"><span style="font-weight: bolder;;font-size:60px;color:#ffffff;">Un réseau de contacts personnalisé</span></div>
        <div class="col-md-12" style="color:white;margin-top:50px"><span style=";font-size:15px;color:#ffffff;font-weight: bold;">&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash; LOREM IPSUM DOLOR SIT ADIPISCING ELIT &ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;&ndash;</span></div>
	</div>

	<div class="container text-center">
		<div class="col-md-12 col-centered text-center">
			<span style="font-family:'Open Sans';font-size:30px;color:#343d4d;"><b>NOTRE EQUIPE</b></span>
		</div>
		
		<div class="row row-centered space-vertical">	
			<div class="col-md-5 col-centered">
				<div class="" style="width:400px;">
					<img style="border-radius:50%;width:191px;height:191px;float:left" src="<?php bloginfo('template_directory'); ?>/assets/images/page1_pic5.jpg" >
					<div class="" style="text-align:left;padding-left:210px">
						<span style="font-family:'Open Sans';font-size:21px;color:#373b43;">Mathieu Phaneuf</span>
						<span style="font-family:'Open Sans';font-size:14px;color:#dd745c;"><p>President</p></span>
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">Praesent vestibulum molestie lacus. Aenean nonummy hedrit mauris. Phasellus porta. Fusce suscipit. varius mi.</span>
					</div>
				</div>
			</div>
			
			<div class="col-md-5 col-centered">
				<div class="" style="width:400px;">
					<img style="border-radius:50%;width:191px;height:191px;float:left" src="<?php bloginfo('template_directory'); ?>/assets/images/page1_pic5.jpg" >
					<div class="" style="text-align:left;padding-left:210px">
						<span style="font-family:'Open Sans';font-size:21px;color:#373b43;">Mathieu Phaneuf</span>
						<span style="font-family:'Open Sans';font-size:14px;color:#dd745c;"><p>President</p></span>
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">Praesent vestibulum molestie lacus. Aenean nonummy hedrit mauris. Phasellus porta. Fusce suscipit. varius mi.</span>
					</div>
				</div>
			</div>
		</div>
		
			<div class="row row-centered space-vertical">	
			<div class="col-md-5 col-centered">
				<div class="" style="width:400px;">
					<img style="border-radius:50%;width:191px;height:191px;float:left" src="<?php bloginfo('template_directory'); ?>/assets/images/page1_pic5.jpg" >
					<div class="" style="text-align:left;padding-left:210px">
						<span style="font-family:'Open Sans';font-size:21px;color:#373b43;">Mathieu Phaneuf</span>
						<span style="font-family:'Open Sans';font-size:14px;color:#dd745c;"><p>President</p></span>
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">Praesent vestibulum molestie lacus. Aenean nonummy hedrit mauris. Phasellus porta. Fusce suscipit. varius mi.</span>
					</div>
				</div>
			</div>
			
			<div class="col-md-5 col-centered">
				<div class="" style="width:400px;">
					<img style="border-radius:50%;width:191px;height:191px;float:left" src="<?php bloginfo('template_directory'); ?>/assets/images/page1_pic5.jpg" >
					<div class="" style="text-align:left;padding-left:210px">
						<span style="font-family:'Open Sans';font-size:21px;color:#373b43;">Mathieu Phaneuf</span>
						<span style="font-family:'Open Sans';font-size:14px;color:#dd745c;"><p>President</p></span>
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">Praesent vestibulum molestie lacus. Aenean nonummy hedrit mauris. Phasellus porta. Fusce suscipit. varius mi.</span>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
<?php get_footer(); ?>
	