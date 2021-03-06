<?php
/**
 * Template Name: Page default
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package website-rets
 * @subpackage Signature
 */

get_header(); ?>

<div class="container"> 
<?php		
while ( have_posts() ) : the_post();
	the_content();
endwhile;
?>
</div>
<?php get_footer(); ?>
