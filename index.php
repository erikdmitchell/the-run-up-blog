<?php
/**
 * The default template
 *
 * @subpackage tru-blog
 * @since tru-blog 1.0.0
 */

get_header(); ?>

<div class="container">
    <div class="row content">
        <?php get_template_part( 'template-parts/content', 'blog' ); ?>
    </div>
</div><!-- .container -->

<?php
get_footer();
