<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package WP_Ogitive
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>
            <?php wp_title(''); ?>
            <?php
            if (wp_title('', false)) {
                echo ' | ';
            }
            ?>
            <?php bloginfo('name'); ?> 
        </title>

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <?php wp_head(); ?>

    </head>

 
    <body <?php body_class(); ?>>



        <header>

            <div class="main-menu">
              <div class="menu-logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo"> 
                    </a> 

                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo1.png" class="logo1">
                    </a>
              </div>

                <div class="main-menu-right">
                    <div class="lang-links">
                        <div class="row">
                            <a href="http://beer.ogitive.info/">Eng</a>
                            <a href="http://beer.ogitive.info/es/">Esp</a>
                        </div>
                    </div>
                        <div class="nav-holder">                                               
                            <?php get_template_part('navigation'); ?>                          
                                     <div id="menu-button">
                                        <i class="fa fa-bars" aria-hidden="true"></i>
                                     </div>
                        </div><!-- nav-holder -->

                    <div class="menu-search">
                       <!-- <input type="search" class="searchbtn"> -->
                       <a href="#" class="searchBtn links"><i class="fa fa-search"></i></a>
                    </div>

                    <div class="top-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-holder">
                                        <?php get_template_part('searchform'); ?>
                                        <span class="close-btn">x</span> <!-- /.close-btn -->
                                    </div> <!-- input-holder -->
                                </div> <!-- col-md-12 -->
                            </div> <!-- row -->
                        </div> <!-- container -->
                    </div> <!-- top-search -->

                </div><!-- main-menu-right -->
            </div><!-- main-menu -->





    
<button id='totheTop'>Back to top</button>


        </header>








<?php if ( is_archive() ) { ?>


      <div class="small-head">
            <div class="gradient7"></div>
            <?php if (get_field('header_image')) { ?>
                <img src="<?php the_field('header_image'); ?>" alt='<?php the_title(); ?>' class="image">
            <?php } ?>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="small-head-title">
                              <?php
                                    the_archive_title( '<h1>', '</h1>' );
                                    the_archive_description( '<div>', '</div>' );
                                ?>
                        </div>
                    </div>    
                </div>
            </div>
       </div>



<?php } elseif (is_search() ) {?>

     <div class="small-head">
            <div class="gradient7"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/aboutusphotoback1.jpg" alt="img">
              <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="small-head-title">
                            <h1>Search results</h1>
                        </div>
                    </div>    
                </div>
            </div>
     </div>


     <?php } elseif (is_single() ) {?>

     <div class="small-head">
            <div class="gradient7"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/aboutusphotoback1.jpg" alt="img">
              <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="small-head-title">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
     </div>


<?php }  elseif (is_home()) {

} else { ?>


    <div class="small-head">
        
            <div class="gradient7"></div>
            <?php if (get_field('header_image')) { ?>
                <img src="<?php the_field('header_image'); ?>" alt='<?php the_title(); ?>' class="image">
            <?php } ?>
            
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="small-head-title">
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>    
                </div>
            </div>
       
    </div>


<?php } ?>




 









        