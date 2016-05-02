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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
	<style> 
		ul {
			margin-top:20px;
			display: inline-block;
			list-style: none outside none;
		 }
		 
		li {
			float:left;
			height: 35px;
			margin:0px 1px 0 1px;
		}
		 
		ul li a {
			display:block;
			color:white;
			text-decoration:none;
			padding:6px 15px 0px 15px;
		}
		 
		ul li:hover {
			color:white;
			text-decoration:none;
			border:1px solid;
		}  
		ul li a:hover {
			color: white;
			text-decoration:none;
		}
		ul li a:click {
			text-decoration:none;
		} 		

		.active{
			color:white;
			text-decoration:none;
			border:1px solid;
		}
	</style>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Modal title</h4>
		  </div>
		  <div class="modal-body">
			...
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
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
				<button type="button" class="btn space-vertical btn-become-member" data-toggle="modal" data-target="#myModal">DEVENEZ MEMBRE</button>
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
	