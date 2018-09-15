<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Ogitive
 */

get_header(); ?>


<?php get_template_part('slider'); ?>


<div class="black">
	<div class="container">
		<div class="col-md-12">
			<h2><?php the_field('responsive_txt','options') ?></h2>
		</div>
	</div> <!-- container -->
</div>



<!-- SECTION BEER STEPS -->
<section class="beer-steps-holder">
	
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="h-holder">
						<h1><?php the_field('section_title','options'); ?></h1>
					</div>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	    

	   

        <div class="steps">
	        <div class="steps-holder">
		        <div class="container">
			         <div class="row ">

                        <div class="col-5">
                         
                           <div class="step1">
                         	<div class="step1-holder">

                         	  <div class="step1-img-holder">	
                         		<img src="<?php echo get_template_directory_uri() ?>/img/step1.png">
                         	  </div> 

                                <div class="step1-rightimg-holder">
                         	     <img src="<?php echo get_template_directory_uri() ?>/img/right.png">	
                         	    </div>

                         		<h2><?php the_field('title1','options'); ?></h2>
                         		<p><?php the_field('text1','options'); ?></p>
                         	</div>
                           </div>
                        </div>
                          <div class="col-2">
                            	<div class="stepflasa">
        		<img src="<?php the_field('main_bottle','options'); ?>" alt="stepflasa">
                            	</div>
                            </div>

                            <div class="col-5">
                              <div class="step2">
                              	<div class="step2-holder">
                              		<div class="step2-img-holder">
                              			<img src="<?php echo get_template_directory_uri() ?>/img/step2.png">
                              		</div>
                                    
                         		<h2><?php the_field('title2','options'); ?></h2>
                         		<p><?php the_field('text2','options'); ?></p>

                              		<div class="step2-rightimg-holder">
                         	          <img src="<?php echo get_template_directory_uri() ?>/img/leftdown.png">	
                         	        </div>


                              	</div>
                              </div>
                            </div>
                     </div> <!-- row -->

                      <div class="row justify-content-between">

                        <div class="col-5">
                         
                           <div class="step3">
                         	<div class="step3-holder">

                         	  <div class="step3-img-holder">	
                         		<img src="<?php echo get_template_directory_uri() ?>/img/step3.png">
                         	  </div> 

                       
                         		<h2><?php the_field('title3','options'); ?></h2>
                         		<p><?php the_field('text3','options'); ?></p>

                         		<div class="step3-rightdownimg-holder">
                         	     <img src="<?php echo get_template_directory_uri() ?>/img/rightdown.png">	
                         	    </div>
                         	</div>
                           </div>
                        </div>


                            

                            <div class="col-4">
                              <div class="step4">
                              	<div class="step4-holder">
                              		<div class="step4-img-holder">
                              			<img src="<?php echo get_template_directory_uri() ?>/img/step4.png">
                              		</div>
                              		<div class="step4-rightimg-holder">
                         	          <img src="<?php echo get_template_directory_uri() ?>/img/right2.png">	
                         	        </div>

                                     <h2><?php the_field('title4','options'); ?></h2>
                         			<p><?php the_field('text4','options'); ?></p>

                              	</div>
                              </div>
                            </div>
                     </div>
                    
                    <div class="step5">
                      <div class="step5-holder">	
                        <div class="row ">

                          <div class="col-2">
                             <div class="step5-img-holder">
                             	<img src="<?php echo get_template_directory_uri() ?>/img/step5.png">
                             </div>
                          </div>

                          <div class="col-6">
                           
                          	<h2><?php the_field('title5','options'); ?></h2>
                         		<p><?php the_field('text5','options'); ?></p>


                          </div>
                          		<div class="col-4">
                         		    <div class="step5-rightimg-holder">
                         	          <img src="<?php echo get_template_directory_uri() ?>/img/leftdown.png">	
                         	        </div>
                                </div>
                          

                        </div> <!-- row -->
                      </div>  
                    </div>
                    

		        </div> <!-- container -->

		        <div class="step-btn">
		          
		        	<div class="step-btn-holder">		        		
		        		   <a href="http://beer.ogitive.info/tutorials/" class="btn tutorial-btn right-button">TUTORIAL</a>
		        		   <a href="/order/" class="btn step left-button">ORDER ONLINE</a>		        		    		        		
		        	</div>					
		         	
		        </div>
	        </div> <!-- steps holder -->
        </div>   <!-- steps  -->


</section> <!-- section steps-holder -->







<section class="tutorial">
	<div class="tutorial-holder">
		<div class="gradient3"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="tutorial-h">
                      <h2><?php the_field('title_tutorial', 'options'); ?></h2>
					</div>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="tutorial-p">
						<p><?php the_field('text_tutorial', 'options'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="btn-tutorial">
						<a href="http://beer.ogitive.info/tutorials/" class="btn tutorial-btn2">CHECK OUT OUR TUTORIAL</a>
					</div>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="tutorial-img">
						<img src="<?php echo get_template_directory_uri() ?>/img/tutorialbeer.png">
					</div>
				</div>
			</div> <!-- row -->
		</div> <!-- container -->
	</div>
</section><!-- section tutorial -->





<!-- SECTION EVENTS -->
<section class="events">
	<div class="events-holder">
		<div class="container">
			<div class="row">

				<?php 
		// WP_Query arguments
		$args = array (
			'category_name'          => 'upcoming-events',
			'posts_per_page'         => '1',
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post(); ?>
				

				<div class="col-md-6">
					<div class="events-photo-holder">
						<?php the_post_thumbnail('cat-thumb'); ?>
					</div>
				</div>
				<div class="col-md-6">
				  <div class="events-info">	
					<div class="events-h3">
						<h3>UPCOMING EVENT</h3>
					</div>
					<div class="events-date">
						<h3>11.12.2017.</h3>
					</div>
					<div class="events-title">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					</div>
					<div class="events-p">
						<?php the_excerpt(); ?>
					</div>
					<div class="row">

						   
					    <a href="<?php the_permalink(); ?>" class="first">MORE DETAILS</a>
						 
						<a href="/category/upcoming-events" class="second">UPCOMING EVENTS</a>
						
					</div>
				  </div>	
				</div>		


			<?php }
		} else { ?>
			
			Page is not reachable.

		<?php }

		// Restore original Post Data
		wp_reset_postdata();
	?>


			</div>
		</div>
	</div>
</section> <!-- section events -->







<!-- SECTION PAST EVENTS -->
<section class="past-events">
	<div class="past-events-holder">
		
		  <div class="container">
			<div class="row">
				  <div class="col-md-12">
				  	<div class="past-events-h2">
				  		<h2>PAST EVENTS</h2>
				  	</div>
                        <div class="past-events-a">
				  	         <a href="/category/past-events" class="third">MORE DETAILS</a>
				  	    </div>     
				  </div>
				 
			</div> <!-- row -->
		  </div> <!-- container -->

		  <div class="col-md-12">
				   <div class="past-events-images">	
				   	<img src="<?php echo get_template_directory_uri() ?>/img/pastevents3photos.png">
				  	  
				   </div>	
				  </div>	
	</div>
</section>







<!-- ABOUT US -->
<section class="about-us">
	
		<div class="row">
			<div class="col-md-3">
				<div class="about-us-img1">
					<img src="<?php echo get_template_directory_uri() ?>/img/aboutusphoto1.png">
				</div>
			</div>
			<div class="col-md-6">
				<div class="about-us-h1">
					<h1><?php the_field('title_about_us', 'options'); ?></h1>
				</div>
				<div class="about-us-p">
					<p><?php the_field('text_about_us', 'options'); ?></p>
				</div>
				<div class="about-us-a">
					<a href="http://beer.ogitive.info/about/" class="fourth">MORE DETAILS</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="about-us-img2">
					<img src="<?php echo get_template_directory_uri() ?>/img/aboutusphoto2.png">
				</div>
			</div>
		</div> <!-- row -->
	
</section>






 <!-- CONTACT -->
<section class="contact">
	
		<div class="gradient5"></div>
		<div class="container">
			<div class="col-md-12">
				<div class="contact-h1">
					<h1>CONTACT</h1>
				</div>
			</div>
		</div> <!-- container -->

		<div class="contact-info">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="contact-email">
							
								<div class="pen">
									<img src="<?php echo get_template_directory_uri() ?>/img/contactpen.png">
								</div>
								<div class="email-holder">
									<p>Email :</p>
                                    <p class="adress"><?php the_field('email', 'options'); ?></p>
								</div>
							
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-phone">
							
								<div class="phone">
									<img src="<?php echo get_template_directory_uri() ?>/img/contactphone.png">
								</div>
								<div class="phone-holder">
									<p>Phone :</p>
									<p class="number"><?php the_field('phone', 'options'); ?></p>
								</div>
							
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-delivery">
							
								<div class="delivery">
									<img src="<?php echo get_template_directory_uri() ?>/img/contactdelivery.png">
								</div>
								<div class="delivery-holder">
									<p>Delivery :</p>
									<p class="location"><?php the_field('delivery', 'options'); ?></p>
								</div>
							
						</div>
					</div>
				</div> <!-- row -->
			</div> <!-- container -->

		</div>

		      <div class="container">
		      	<div class="row">
		      		 <div class="contact-a">
					    <a href="http://beer.ogitive.info/contact/" class="fifth">MORE DETAILS</a>
				     </div>
		      	</div>
		      </div>
	
</section>
















<?php get_footer(); ?>