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
 * @package website-rets
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
			<h4 class="modal-title" id="myModalLabel">Abonnez-vous à notre liste de diffusion</h4>
		  </div>
		  
			<!-- Begin MailChimp Signup Form -->
			<!--<link href="< ?php echo get_template_directory_uri(); ?>/assets/css/mailchimp-classic-10_7.css" rel="stylesheet" type="text/css">
			< style type="text/css">
				#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
				/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
				   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			< /style>-->
			
				<form action="//rets.us12.list-manage.com/subscribe/post?u=b2f21f8b320e7eea0e11ca760&amp;id=783d7babd4" method="post" id="mc-embedded-subscribe-form" 
					name="mc-embedded-subscribe-form" class="validate form-horizontal" target="_blank" novalidate>
					<div class="modal-body">
						<div id="mc_embed_signup_scroll">
							<div class="col-sm-12 pull-right" style="color:red"><span class="asterisk">*</span> indique requis</div>
							
							<div class="form-group">
								<label for="mce-EMAIL" class="col-sm-2 control-label">Email <span class="asterisk">*</span></label>
								<div class="col-sm-10">
								  <input type="email" class="form-control required email" name="EMAIL" id="mce-EMAIL" placeholder="Email">
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
							
							<br />
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
							
							<br />
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
								<label for="mce-group[2969]-2969-1">
									<input type="checkbox" value="64" name="group[2969][64]" id="mce-group[2969]-2969-1">
									Étudiant
								</label>
							</div>
							<div class="checkbox">
								<label for="mce-group[2969]-2969-2">
									<input type="checkbox" value="128" name="group[2969][128]" id="mce-group[2969]-2969-2">
									Autre
								</label>
							</div>

						
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none;color:green"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true">
								<input type="text" name="b_b2f21f8b320e7eea0e11ca760_783d7babd4" tabindex="-1" value="">
							</div>
						</div>
						
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
				<input type="submit" value="Fermer" name="subscribe" id="mc-embedded-subscribe" data-dismiss="modal" class="btn btn-default" >
				<input type="submit" value="S'abonner" name="subscribe" id="mc-embedded-subscribe" class="btn btn-big-orange" >  <!-- data-dismiss="modal"-->
			</div>
		  </form>	
		</div>
	  </div>
	</div>
	<!-- END Modal -->


	<div class="header-default">
		<div class="container-fluid">
			<div class="col-md-12 space-vertical" style="color:white">			
				<div>
					<p style="text-align:center;"><span><a  style="color:#ffffff;font-family:Playball;font-size:72px;" data-url="home" data-action="switchPage">LOGO RETS</a></span></p>
				</div>
			</div>
			<div class="col-md-12;">
			<?php wp_nav_menu($args); ?>
					<!--<ul>
						<li class="active"><a href="home"><span style="">ACCUEIL</span></a></li>
						<li><a title="EN CONSTRUCTION" href="#">ENTREPRENEUR & CO.</a></li>
						<li><a title="EN CONSTRUCTION" href="#">ARTICLES</a></li>
						<li><a title="EN CONSTRUCTION" href="#">CONFERENCE</a></li>
						<li><a title="EN CONSTRUCTION" href="#"><span style="">CALENDRIER</span></a></li>
						<li><a title="EN CONSTRUCTION" href="#">A PROPOS</a></li>
					</ul>-->
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
		
		<!--<div class="row row-centered space-vertical">	
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
		</div>-->
		
		
		<div class="row row-centered space-vertical">	
			<div class="col-md-4 col-centered">
				<div class="" style="width:300px;">
					<img style="border-radius:50%;width:95px;height:95px;float:left" src="<?php bloginfo('template_directory'); ?>/assets/images/page1_pic5.jpg" >
					<div class="" style="text-align:left;padding-left:110px">
						<span style="font-family:'Open Sans';font-size:21px;color:#373b43;">Mathieu Phaneuf</span>
						<span style="font-family:'Open Sans';font-size:14px;color:#dd745c;"><p>President</p></span>
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">Praesent vestibulum molestie lacus. Aenean nonummy hedrit mauris. Phasellus porta.</span>
						<br />
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">
							<a title="Facebook" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://www.facebook.com/regroupRETS/" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/facebook_icon.png" alt="Facebook" />
							</a>
							<a title="Twitter" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://twitter.com/ClubEnergieETS" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/twitter_icon.png" alt="Twitter" />
							</a> 
							<a title="Linkedin" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://twitter.com/ClubEnergieETS" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/linkedin_icon.png" alt="Linkedin" />
							</a> 
							<a title="Envoyer par mail" href="mailto:Rets.communication@etsmtl.net?" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/email_icon.png" alt="email" />
							</a>
							<br />
							<a  target="_blank" href="http://rets.ca">http://mathieuphaneuf.ca/</a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-centered">
				<div class="" style="width:300px;">
					<img style="border-radius:50%;width:95px;height:95px;float:left" src="<?php bloginfo('template_directory'); ?>/assets/images/page1_pic5.jpg" >
					<div class="" style="text-align:left;padding-left:110px">
						<span style="font-family:'Open Sans';font-size:21px;color:#373b43;">Julian Lucchesi</span>
						<span style="font-family:'Open Sans';font-size:14px;color:#dd745c;"><p>President</p></span>
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">Praesent vestibulum molestie lacus. Aenean nonummy hedrit mauris. Phasellus porta.</span>
						<br />
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">
							<a title="Facebook" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://www.facebook.com/regroupRETS/" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/facebook_icon.png" alt="Facebook" />
							</a>
							<a title="Twitter" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://twitter.com/ClubEnergieETS" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/twitter_icon.png" alt="Twitter" />
							</a> 
							<a title="Linkedin" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://twitter.com/ClubEnergieETS" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/linkedin_icon.png" alt="Linkedin" />
							</a> 
							<a title="Envoyer par mail" href="mailto:Rets.communication@etsmtl.net?" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/email_icon.png" alt="email" />
							</a>
							<br />
							<a  target="_blank" href="http://rets.ca">http://mathieuphaneuf.ca/</a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-centered">
				<div class="" style="width:300px;">
					<img style="border-radius:50%;width:95px;height:95px;float:left" src="<?php bloginfo('template_directory'); ?>/assets/images/page1_pic5.jpg" >
					<div class="" style="text-align:left;padding-left:110px">
						<span style="font-family:'Open Sans';font-size:21px;color:#373b43;">William St-Pierre</span>
						<span style="font-family:'Open Sans';font-size:14px;color:#dd745c;"><p>President</p></span>
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">Praesent vestibulum molestie lacus. Aenean nonummy hedrit mauris. Phasellus porta.</span>
						<br />
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">
							<a title="Facebook" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://www.facebook.com/regroupRETS/" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/facebook_icon.png" alt="Facebook" />
							</a>
							<a title="Twitter" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://twitter.com/ClubEnergieETS" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/twitter_icon.png" alt="Twitter" />
							</a> 
							<a title="Linkedin" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://twitter.com/ClubEnergieETS" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/linkedin_icon.png" alt="Linkedin" />
							</a> 
							<a title="Envoyer par mail" href="mailto:Rets.communication@etsmtl.net?" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/email_icon.png" alt="email" />
							</a>
							<br />
							<a  target="_blank" href="http://rets.ca">http://mathieuphaneuf.ca/</a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-centered">
				<div class="" style="width:300px;">
					<img style="border-radius:50%;width:95px;height:95px;float:left" src="<?php bloginfo('template_directory'); ?>/assets/images/page1_pic5.jpg" >
					<div class="" style="text-align:left;padding-left:110px">
						<span style="font-family:'Open Sans';font-size:21px;color:#373b43;">Jonathan Dorleans</span>
						<span style="font-family:'Open Sans';font-size:14px;color:#dd745c;"><p>President</p></span>
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">Praesent vestibulum molestie lacus. Aenean nonummy hedrit mauris. Phasellus porta.</span>
						<br />
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">
							<a title="Facebook" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://www.facebook.com/regroupRETS/" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/facebook_icon.png" alt="Facebook" />
							</a>
							<a title="Twitter" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://twitter.com/ClubEnergieETS" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/twitter_icon.png" alt="Twitter" />
							</a> 
							<a title="Linkedin" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://twitter.com/ClubEnergieETS" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/linkedin_icon.png" alt="Linkedin" />
							</a> 
							<a title="Envoyer par mail" href="mailto:Rets.communication@etsmtl.net?" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/email_icon.png" alt="email" />
							</a>
							<br />
							<a  target="_blank" href="http://rets.ca">http://mathieuphaneuf.ca/</a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-centered">
				<div class="" style="width:300px;">
					<img style="border-radius:50%;width:95px;height:95px;float:left" src="<?php bloginfo('template_directory'); ?>/assets/images/page1_pic5.jpg" >
					<div class="" style="text-align:left;padding-left:110px">
						<span style="font-family:'Open Sans';font-size:21px;color:#373b43;">Laure Cerisy</span>
						<span style="font-family:'Open Sans';font-size:14px;color:#dd745c;"><p>President</p></span>
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">Praesent vestibulum molestie lacus. Aenean nonummy hedrit mauris. Phasellus porta.</span>
						<br />
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">
							<a title="Facebook" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://www.facebook.com/regroupRETS/" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/facebook_icon.png" alt="Facebook" />
							</a>
							<a title="Twitter" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://twitter.com/ClubEnergieETS" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/twitter_icon.png" alt="Twitter" />
							</a> 
							<a title="Linkedin" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://twitter.com/ClubEnergieETS" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/linkedin_icon.png" alt="Linkedin" />
							</a> 
							<a title="Envoyer par mail" href="mailto:Rets.communication@etsmtl.net?" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/email_icon.png" alt="email" />
							</a>
							<br />
							<a  target="_blank" href="http://rets.ca">http://mathieuphaneuf.ca/</a>
						</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-centered">
				<div class="" style="width:300px;">
					<img style="border-radius:50%;width:95px;height:95px;float:left" src="<?php bloginfo('template_directory'); ?>/assets/images/page1_pic5.jpg" >
					<div class="" style="text-align:left;padding-left:110px">
						<span style="font-family:'Open Sans';font-size:21px;color:#373b43;">Olivier Rheault Gagnon</span>
						<span style="font-family:'Open Sans';font-size:14px;color:#dd745c;"><p>President</p></span>
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">Praesent vestibulum molestie lacus. Aenean nonummy hedrit mauris. Phasellus porta.</span>
						<br />
						<span style="font-family:'Open Sans';font-size:14px;color:#9da2a7;">
							<a title="Facebook" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://www.facebook.com/regroupRETS/" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/facebook_icon.png" alt="Facebook" />
							</a>
							<a title="Twitter" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://twitter.com/ClubEnergieETS" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/twitter_icon.png" alt="Twitter" />
							</a> 
							<a title="Linkedin" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes);return false;" href="https://twitter.com/ClubEnergieETS" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/linkedin_icon.png" alt="Linkedin" />
							</a> 
							<a title="Envoyer par mail" href="mailto:Rets.communication@etsmtl.net?" rel="nofollow" target="_blank">
								<img style="width:20px;height:20px;" src="http://korben.info/wp-content/themes/korben2013/hab/email_icon.png" alt="email" />
							</a>
							<br />
							<a  target="_blank" href="http://rets.ca">http://mathieuphaneuf.ca/</a>
						</span>
					</div>
				</div>
			</div>
		</div>		
	</div>
	
	<div class="row"> 
		<div class="second-bar space-vertical">
			<div class="col-md-12" style="padding-top:40px"></div>
			<div class="col-md-12" style="color:white;margin-top:50px"></div>
		</div>
	</div>
	
	<div class="col-md-12 space-vertical"> <span style="font-family:'Open Sans';font-size:30px;color:#343d4d;"><b>NOS PARTENAIRES:</b></span></div>
	<div class="col-md-12" style="margin-top: 15px;"> <p style="text-align:center;"><span style="font-family:'Open Sans';font-size:19px;color:#343d4d;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></p></div>
	<div class="row row-centered space-vertical">	
		<div class="col-md-3 col-centered">
			<div style="width: 219px; height: 75px;">
				<a href="https://www.etsmtl.ca/Entreprises-diplomes/Diplomes/Le-Reseau-ETS" target="_blank">
					<img id="_mjs-object_77" src="<?php bloginfo('template_directory'); ?>/assets/images/partenaire-reseau-ets.png" class="" style="height: 75px;border:1px solid;color:white">
				</a>
			</div>
		</div>
		
		<div class="col-md-3 col-centered">
			<div style="width: 219px; height: 75px;">
				<a href="https://www.etsmtl.ca/Entreprises-diplomes/Diplomes/Le-Reseau-ETS" target="_blank">
					<img id="_mjs-object_77" src="<?php bloginfo('template_directory'); ?>/assets/images/partenaire-reseau-ets.png" class="" style="height: 75px;border:1px solid;color:white">
				</a>
			</div>
		</div>	

		<div class="col-md-3 col-centered">
			<div style="width: 219px; height: 75px;">
				<a href="https://www.etsmtl.ca/Entreprises-diplomes/Diplomes/Le-Reseau-ETS" target="_blank">
					<img id="_mjs-object_77" src="<?php bloginfo('template_directory'); ?>/assets/images/partenaire-reseau-ets.png" class="" style="height: 75px;border:1px solid;color:white">
				</a>
			</div>
		</div>		
	</div>
	<div class="col-md-12 space-vertical"></div>
<?php get_footer(); ?>
	