<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * @package WordPress
 * @subpackage tru-blog
 * @since tru-blog 1.0.0
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php if ( have_posts() ) : ?>
                <header class="archive-header">
                    <h1 class="archive-title"><?php echo single_cat_title( '', false ); ?></h1>
                </header><!-- .archive-header -->

                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <?php get_template_part( 'template-parts/content', 'category' ); ?>
                <?php endwhile; ?>

                <?php
                the_posts_navigation(
                    array(
                        'prev_text' => __( '&laquo; Older Posts', 'tru-blog' ),
                        'next_text' => __( 'Newer Posts &raquo;', 'tru-blog' ),
                    )
                );
                ?>

            <?php else : ?>
                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            <?php endif; ?>

        </div>
    </div>
</div><!-- .container -->

<?php
get_footer();
