<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package rets
 * @subpackage Signature
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" />
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
		
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	
	<div class="header">
		<div class="container-fluid">
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

			<div class="header">
				<div class="container-fluid">
					<div class="col-md-12 space-vertical" style="color:white">			
						<div>
							<p style="text-align:center;"><span><a  style="color:#ffffff;font-family:Playball;font-size:72px;" data-url="home" data-action="switchPage">LOGO RETS</a></span></p>
						</div>
					</div>
					<div class="col-md-12;">
						<?php wp_nav_menu($args); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper">