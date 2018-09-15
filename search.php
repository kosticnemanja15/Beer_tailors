<?php
/**
 * The template for displaying search results pages.
 *
 * @package WP_Ogitive
 */

get_header(); ?>
<section class="searchSection">
  <div class="container">
	<div class="row">
			<div class="col-md-12">
				<h1 class="page-title">
					<?php printf( __( 'Search Results for: %s', 'wpog' ), '<span>' . get_search_query() . '</span>' ); ?>
				
				</h1>
			</div>
			<?php if ( have_posts() ) : ?>
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






			<?php endwhile; ?>

			<?php // wpog_paging_nav(); ?>

		<?php else : ?>
	<div class="col-md-12">
		<div class="m-t-100">
			<p>There are no results</p>
		</div>
	</div>
<?php endif; ?>
	</div>
</div>
</section>
<?php get_footer(); ?>
