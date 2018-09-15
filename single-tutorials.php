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



			       <div class="beer-type">
			           <div class="row">
	                      <div class="col-md-3">
							<div class="beer-type-img">
								<img src="<?php the_field('bear_style_image'); ?>" alt="beer_img">
							</div>
						</div>
						<div class="col-md-9">
						  <div class="beer-type-right">

							<h3><?php the_title() ?></h3>
							<div class="beer-type-text">
								<p><?php the_content(); ?></p>


								<h4>Main ingredients</h4>
								<p><?php the_field('main_ingredients'); ?></p>
								<h4>Common alcohol content</h4>
								<p><?php the_field('common_alcohol_content'); ?></p>
								<h4>Possible Spice additions</h4>
								<p><?php the_field('possible_spice_additions'); ?>
								</p>
								<h4>Possible Fruit additions</h4>
								<p><?php the_field('possible_fruit_additions'); ?>
								</p>
							</div>
						   </div>	
						 </div>
			          </div> <!-- row -->
	             </div><!-- beer-type	 -->





			</div>
		</div>
	</div>

</main>

<?php endwhile; ?>
<!-- end the loop -->


<?php get_footer(); ?>