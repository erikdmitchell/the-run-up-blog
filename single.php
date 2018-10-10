<?php get_header(); ?>

    <?php
    //if ( in_category( 'blog' ) ) :
        get_template_part( 'template-parts/content', 'single' );
    //else :
        //get_template_part( 'template-parts/content', 'single' );
    //endif;
    ?>

<?php
get_footer();
