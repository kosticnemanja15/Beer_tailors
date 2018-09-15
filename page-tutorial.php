<?php
/*
*
* Template Name: Tutorial
*
*/

get_header(); ?>


<!-- start the loop -->
<?php while ( have_posts() ) : the_post(); ?>

	
   <div class="container">
	<div class="content-links">	
			<div class="col-md-12">
				<h2>Contents</h2>
			</div>
		


		<div class="col-md-12">
			<div class="contents-text">
				<a href="#"><h3 class="beerrecipe-click">Beer recipe design</h3></a>
				<a href="#beer-styles"><p class="beerstyles-click">Beer styles</p></a>
				<a href="#"><p class="alcoholstrength-click">Alcohol strength</p></a>
				<p>Bitterness</p>
				<a href="#"><p class="additions-click">Additions</p></a>
				<a href="#bottles-type"><h3 class="bottles-click">Bottles</h3></a>
				<a href="#label"><h3 class="label-click">Label design</h3></a>
				<a href="#custom-label"><p class="custom-click">Customizable label</p></a>
				<a href="#design-scratch"><p class="design-click">Design from scratch</p></a>
			</div>
		</div>
	</div>	
   </div> <!-- container -->




	<div class="container">
		<div class="col-md-12">
				<h2 class="beerrecipe"><?php the_field('recipe_title'); ?></h2>
		</div>
		<div class="col-md-12">
			<div class="text-tutorial">
				<p><?php the_field('recipe_text'); ?></p>
			</div>
		</div>
	</div><!-- container -->
<!-- </main>
 -->












<section class="beer-styles">
	<div class="container">
		<div class="col-md-12">
			<h3>Beer styles</h3>
		</div>



   





	<?php 
		// WP_Query arguments
		$args = array (
			'post_type'              => 'tutorial',
			'posts_per_page'         => '-1',
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post(); ?>




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





			<?php }
		} else { ?>
			
			Page is not reachable.

		<?php }

		// Restore original Post Data
		wp_reset_postdata();
	?>




					



	 
	</div>  <!-- container -->
</section> <!-- beer styles -->












<div class="tutorial-ad">
	<div class="container">
	  <div class="col-md-12">
		<h3><?php the_field('strength_title'); ?></h3>
		  <p><?php the_field('strength_text'); ?></p>
	  </div>





		<div class="col-md-12">
			<h3 class="additions-beer"><?php the_field('addition_title'); ?></h3>
			<p><?php the_field('addition_text'); ?></p>
		</div>
	</div> <!-- container -->
</div> <!-- tutorial ad -->





<section class="bottles-type">
	<div class="container">
		<div class="col-md-12">
			<h2><?php the_field('bottles_title'); ?></h2>
		
		     <p><?php the_field('bottles_text'); ?></p>
        </div>




      <div class="bottles">
		





			 <?php

			// check if the repeater field has rows of data
			if( have_rows('bottle_type') ):

			 	// loop through the rows of data
			    while ( have_rows('bottle_type') ) : the_row(); ?>


		        <div class="row">
					<div class="col-md-3">
						<div class="bottles-img">
							<img src="<?php the_sub_field('bottle_image'); ?>" alt="">
						</div>
					</div>
					<div class="col-md-9">
					  <div class="bottles-right">
						<h3><?php the_sub_field('bottle_name'); ?></h3>
						<div class="bottles-text">
							
							<h4>Capacity</h4>
							<p><?php the_sub_field('bottle_capacity'); ?></p>
							<h4>Seal</h4>
							<p><?php the_sub_field('bottle_seal'); ?></p>
							<h4>Color</h4>
							<p><?php the_sub_field('bottle_color'); ?></p>
							
						</div>
					  </div>	
					</div>
				</div> <!-- row -->


			 <? endwhile;
			else :
			    echo 'Content is not available.';
			endif;
			?>			




		
	  </div><!-- bottles	 -->




	</div> <!-- container -->
</section>









<section class="label">
	<div class="container">
		<div class="col-md-12">
			<h2><?php the_field('label_title'); ?></h2>
			<p><?php the_field('label_text'); ?></p>
		</div>

        
        <div class="col-md-12">
        	<h3 class="custom-label"><?php the_field('customizable_label_title'); ?></h3>
        	<p><?php the_field('customizable_label_text'); ?></p>
        </div>
        <div class="col-md-12">
        	<div class="label-img">
        		<img src="<?php the_field('customizable_label_image1'); ?>" alt="label_img1">
        	</div>
        </div>
        <div class="col-md-12">
        	<div class="label-img2">
        		<img src="<?php the_field('customizable_label_image2'); ?>" alt="label_img2">
        	</div>
        </div>

        <div class="col-md-12">
        	<div class="label-img3">
        		<h3><?php the_field('final_result_title'); ?></h3>
        		<img src="<?php the_field('final_result_image'); ?>" alt="label_img3">
        	</div>
        </div>


        <div class="col-md-12">
        	<h3 class="design-scratch"><?php the_field('design_from_scratch_title'); ?></h3>
        	<p><?php the_field('design_from_scratch_text'); ?></p>
        </div>

	
         <div class="col-md-12">
	       <div class="label-img4">
		       <img src="<?php the_field('design_from_scratch_image'); ?>" alt="label_img">
	       </div>
	    </div> 
	</div> <!-- container  -->     
</section>




                 <div class="container">
                    <div class="small-links">
                            
                                   <p><a href="<?php echo home_url(); ?>">Home</a>  - <?php the_title(); ?></p>
                            
                    </div>
                </div> <!-- container -->





<?php endwhile; ?>
<!-- end the loop -->




<?php get_footer(); ?>
