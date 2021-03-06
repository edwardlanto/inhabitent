<?php /* Template Name: about*/ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<div class="about-hero">
		<h1 class = "about-text">About</h1>	
	</div>
	<div class="about-text-container container">	
		<h2 class ="about-content-header">Our Story</h2>
		<?php echo CFS()->get( 'about_our_story' ); ?>
		<h2 class ="about-content-header">Our Team</h2>
		<?php echo CFS()->get( 'about_our_team' ); ?>
	</div>


<?php get_footer(); ?>