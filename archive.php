<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Ogitive
 */

get_header(); ?>




		<?php if ( have_posts() ) : ?>



			<main class="past-events-main">
					<div class="past-events-main-holder">
						<div class="container">



						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							
								<div class="col-md-12">
									<div class="past-events-archive">
										<div class="row">
											<div class="col-md-6">
												<div class="past-events-img">
													<a href="<?php the_permalink(); ?>">
														<?php the_post_thumbnail('cat-thumb'); ?>
													</a>
												</div>
											</div> <!-- col-md-6 -->
											<div class="col-md-6">
												<div class="past-events-info">
													<div class="past-events-date">
														<p><?php the_field('datum'); ?></p>
													</div>
													<div class="past-events-h1">
														<a href="<?php the_permalink(); ?>">
															<h1><?php the_title(); ?></h1>
														</a>
													</div>
													<div class="past-events-p">
														<?php the_excerpt(); ?>
													</div>
												</div>
											</div> <!-- col-md-6 -->
										</div> <!-- row -->
									</div>
								</div> <!-- col-md-12 -->								


						<?php endwhile; endif; ?>


						</div> <!-- container -->
					</div>
				</main>	



				<div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<div class="page-num">
        				<?php wp_pagenavi(); ?>
        			</div>
        		</div>
        	</div> <!-- row -->
        </div> <!-- container -->


				
			


<?php get_footer(); ?>
