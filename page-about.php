<?php
/*
*
* Template Name: About Us
*
*/

get_header(); ?>


<!-- start the loop -->
<?php while ( have_posts() ) : the_post(); ?>

<main class="about-us-main">
	<div class="about-us-main-holder">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-about-us">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>

        <div class="container">
        	<div class="row">
        		<div class="col-md-6">
        			<div class="about-alex">
        				<div class="about-alex-holder">
        					<div class="alex-img">
        						<img src="<?php the_field('photo1'); ?>" alt="photo1">
        					</div>
        					<div class="alex-text">
        						<?php the_field('text1'); ?>
        					</div>
        				</div>
        			</div>
        		</div>
        		<div class="col-md-6">
        			<div class="about-attila">
        				<div class="about-attila-holder">
        					<div class="attila-img">
        						<img src="<?php the_field('photo2'); ?>" alt='photo2'>
        					</div>
        					<div class="attila-text">
        						<?php the_field('text2'); ?>
                                </p>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
               

	</div>
           <div class="container">
                    <div class="small-links">
                            
                                   <p><a href="<?php echo home_url(); ?>">Home</a>  - <?php the_title(); ?></p>
                            
                    </div>
                </div> <!-- container -->
</main>

<?php endwhile; ?>
<!-- end the loop -->




<?php get_footer(); ?>
