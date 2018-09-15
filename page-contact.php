<?php
/*
*
* Template Name: Contact
*
*/

get_header(); ?>


<!-- start the loop -->
<?php while ( have_posts() ) : the_post(); ?>

<main class="contact-main">
	
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contact-holder">
					    <div class="contact-email1">
							<div class="row">
								<div class="pen1">
									<img src="<?php echo get_template_directory_uri(); ?>/img/contactpen1.png">
								</div>
								<div class="email-holder1">
									<p>Email :</p>
                                    <p class="adress1"><?php the_field('email'); ?></p>
								</div>
							</div>
						</div>
						<div class="contact-phone1">
							<div class="row">
								<div class="phone1">
									<img src="<?php echo get_template_directory_uri(); ?>/img/contactphone1.png">
								</div>
								<div class="phone-holder1">
									<p>Phone :</p>
									<p class="number1"><?php the_field('phone'); ?></p>

								</div>
							</div>
						</div>
						<div class="contact-delivery1">
							<div class="row">
								<div class="delivery1">
									<img src="<?php echo get_template_directory_uri(); ?>/img/contactdelivery1.png">
								</div>
								<div class="delivery-holder1">
									<p>Delivery :</p>
									<p class="location1"><?php the_field('delivery'); ?></p>
								</div>
							</div>
						</div>
                    </div>
				</div>
				<div class="col-md-6">
				  <div class="contact-form">	
					<?php the_content(); ?>
					<!-- <div class="email-us">
                      <div class="email-us-holder">
						<div class="email-us-h3">
							<h3>Email us</h3>
						</div>
						<div class="name-lastname">
							<p>Name and last name:</p>
							<input type="text" name="your-name" class="contact-input">
						</div>
						<div class="email-address">
							<p>Email address:</p>
							<input type="email" name="your-email" class="contact-input">
						</div>
						<div class="message">
							<p>Message:</p>
							<textarea name="your-message"></textarea>
						</div>
						<div class="order-btn">
							<a href=""><button type="submit"></button></a>
						</div>
					  </div>	

					</div> -->
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
