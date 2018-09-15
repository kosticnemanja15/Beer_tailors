<?php
/*
*
* Template Name: Order
*
*/
get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

  <main class="order-main">

    <div class="order-main-holder">

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-order-us">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">

          <div id="main">

            <form id="SignupForm" action="">
              <fieldset id="first-step">

                <a id="need-help1" rel="modal:open">Need help?</a>

                <?php
                foreach (af_get_product_help() as $help_id => $post_id):

                  $post = get_post($post_id);
                  ?>

                  <div id="<?php echo $help_id; ?>" class="modal help-tutorial">
                    <div class="container">

                      <div class="beer-type">
                        <div class="row">

                          <div class="col-md-3">
                            <div class="beer-type-img">
                              <img src="<?php the_field('bear_style_image', $post_id); ?>" alt="beer_img">
                            </div>
                          </div>
                          <div class="col-md-9">
                            <div class="beer-type-right">

                              <h3><?php echo $post->post_title; ?></h3>
                              <div class="beer-type-text">
                                <p><?php echo wpautop($post->post_content); ?></p>


                                <h4>Main ingredients</h4>
                                <p><?php the_field('main_ingredients', $post_id); ?></p>
                                <h4>Common alcohol content</h4>
                                <p><?php the_field('common_alcohol_content', $post_id); ?></p>
                                <h4>Possible Spice additions</h4>
                                <p><?php the_field('possible_spice_additions', $post_id); ?>
                                </p>
                                <h4>Possible Fruit additions</h4>
                                <p><?php the_field('possible_fruit_additions', $post_id); ?>
                                </p>
                              </div>
                            </div>
                          </div>

                        </div> <!-- row -->
                      </div><!-- beer-type	 -->

                    </div><!-- .container -->
                    <a href="#" rel="modal:close">Close</a>
                  </div>
                <?php endforeach; ?>

                <div class="beer-style">
                  <legend>Recipe</legend>
                  <select class="form-control">
                    <option disabled selected>Beer Style</option>
                  </select>
                </div><!-- beer style-->

                <div class="alcohol-strength">
                  <select class="form-control">
                    <option disabled selected>Alcohol strength (optional)</option>
                  </select>
                </div><!-- alcohol-strenth-->

                <div class="bitterness">
                  <select class="form-control">
                    <option disabled selected>Bitterness (optional)</option>
                  </select>
                </div><!-- bitterness -->


                <div class="additions">
                  <legend>Additions</legend>
                  <h4>Additions <span>(Maximum 3 additions.)</span></h4>
                  <div id="additions-list"></div>
                  <input id="other-addition" type="text" placeholder="For example rosemary"/>
                </div><!-- fruitness-->

              </fieldset><!-- first-step -->


              <fieldset class="choose-bottle">
                <legend>Bottle</legend>
                <div id="bottle">
                  <h4>Choose Bottle</h4>

                  <a id="need-help2" href="#modal2" rel="modal:open">Need help?</a>
                  <div id="modal2" class="modal">
                    <?php echo wpautop(get_field('step2_help', 'options')); ?>
                    <a href="#" rel="modal:close">Close</a>
                  </div>

                  <select class="form-control"></select>
                  <div class="image-holder"></div>

                </div><!-- bottle -->
              </fieldset>


              <fieldset>
                <legend>Label</legend>
                <div id="label">
                  <h4>Label</h4>

                  <a id="need-help3" href="#modal3" rel="modal:open">Need help?</a>
                  <div id="modal3" class="modal">
                    <?php echo wpautop(get_field('step3_help', 'options')); ?>
                    <a href="#" rel="modal:close">Close</a>
                  </div>

                  <select class="form-control"></select>
                  <div class="image-holder"></div>
                </div><!-- label -->
              </fieldset>


              <fieldset class="finish-step">
                <div id="finish">
                  <div class="container fluid">
                    <div class="row">
                      <legend>Finish</legend>

                        <div class="col-md-6 col-sm-12">
                          <div class="left-finish">
                            <input type="text" id="order-name" placeholder="First and last name"/>
                            <input type="text" id="order-email" placeholder="Email address"/>
                            <input type="text" id="order-phone" placeholder="Phone number"/>
                          </div><!-- left-finish -->
                        </div><!-- col-md-6 -->
                        <div class="col-md-6 col-sm-12">
                          <div class="rigth-finish">
                            <input type="text" id="order-address" placeholder="Delivery address"/>
                            <textarea id="order-comment" class="form-control" rows="4" cols="50"
                                      placeholder="Additional comments"></textarea>
                            <?php echo wpautop(get_field('final_notes', 'options')); ?>

                            <div id="checkbox-terms">
                              <label>
                                <input type="checkbox" value="1" id="order-tos">
                                Agree with 
                                <a href="<?php echo (get_field('terms_and_conditions', 'options')); ?>" target="_blank"><span>Terms and Conditions</span></a>
                              </label>
                            </div><!-- checkbox -->
                          </div><!-- rigth-finish -->
                        </div><!-- col-md-6 -->
                    </div><!-- row -->
                  </div><!-- container -->
                </div><!-- #finish -->
                <p>
                  <input id="SaveAccount" type="button" value="SUBMIT"/>
                </p>
              </fieldset><!-- finish-step -->


            </form>
          </div><!-- main -->


        </div>
      </div>


    </div>
                <div class="container">
                    <div class="small-links">                           
                           <p><a href="<?php echo home_url(); ?>">Home</a>  - Design your beer</p>                           
                    </div>
                </div> <!-- container -->
  </main>

<?php endwhile; ?>

<script>
	document.addEventListener("DOMContentLoaded", function(event) {
		af_wizard.init(
      <?php echo json_encode(af_get_products()); ?>,
      <?php echo json_encode(af_get_bottles()); ?>,
      <?php echo json_encode(af_get_labels()); ?>
		);
	});
</script>

<?php get_footer(); ?>
