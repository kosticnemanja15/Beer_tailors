<?php
/**
 * The template for displaying all single posts.
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