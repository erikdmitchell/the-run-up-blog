<?php
/**
 * Main page template
 *
 * @subpackage tru-blog
 * @since 1.0.0
 */

get_header(); ?>

<div class="container">
    <div class="row content">
        <div class="col-12">
            <?php tru_blog_post_thumbnail(); ?>

            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, this page does not exist.', 'tru-blog' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div><!-- .container -->

<?php
get_footer();
