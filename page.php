<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WP_Ogitive
 */

get_header(); ?>


<!-- start the loop -->
<?php while ( have_posts() ) : the_post(); ?>

<main>

	<div class='container'>
		<div class='col-md-12'>
			<div class='content'>
				<?php the_content(); ?>
			</div>
		</div>
	</div>

</main>

<?php endwhile; ?>
<!-- end the loop -->


<?php get_footer(); ?>