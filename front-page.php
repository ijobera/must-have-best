<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Must_Best_Mom
 */

get_header();
?>

		<div class="front-slider">
            <?php
            echo do_shortcode('[smartslider3 slider=2]');
            ?>
        </div>
    

	<div id="primary" class="content-area container">


		<main id="main" class="site-main">
                <?php

					query_posts('posts_per_page=3'); /*1, 2*/

					if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<div class="post-margin front-post">

						<div class="latest-post">
							<?php if(has_post_thumbnail()) : ?>
									<?php the_post_thumbnail();?>
                            <?php endif; ?>
                            
                        <div class="front-title">
						    <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title();/*3*/ ?></a></div>
							<p class="time">
								<?php the_time('g:i a'); ?> |
								<?php the_time('F j, Y'); ?>
                            </p>
                        </div>               
                        
                        </div>
					</div>
				<?php endwhile; ?> <?php wp_reset_query(); /*4*/ ?>

		</main><!-- #main -->

		<h2>Parenting</h2>
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
