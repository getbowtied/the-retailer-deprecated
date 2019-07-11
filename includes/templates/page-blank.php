<?php
/*
Template Name: Blank
*/
?>

<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
        
        <div class="page_full_width">
            <div class="entry-content">
                <div class="">
                    <?php the_content(); ?>    
                </div>
            </div><!-- .entry-content -->
        </div>

    <?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>