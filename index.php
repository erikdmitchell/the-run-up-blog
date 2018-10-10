<?php
/**
 * The default template
 *
 * @package WordPress
 * @subpackage tru-blog
 * @since tru-blog 1.0.0
 */

get_header(); ?>

<div class="container">
    <div class="row content">
        <?php 
        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

        if ( 1 === $paged ) :
            get_template_part( 'template-parts/content-blog', 'landing' );
        else :
            get_template_part( 'template-parts/content-blog', 'archive' );
        endif;
        ?>
    </div>
</div><!-- .container -->

<?php
get_footer();
