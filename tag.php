<?php
/**
 * The template for displaying tag pages
 *
 * Used to display archive-type pages for posts in a tag.
 *
 * @subpackage tru-blog
 * @since tru-blog 1.0.0
 */
?>
<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php if ( have_posts() ) : ?>
                <header class="archive-header">
                    <h1 class="archive-title"><?php printf( __( 'Tag Archives: %s', 'tru-blog' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>

                    <?php if ( tag_description() ) : // Show an optional tag description ?>
                        <div class="archive-meta"><?php echo tag_description(); ?></div>
                    <?php endif; ?>
                </header><!-- .archive-header -->

                <?php
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <?php get_template_part( 'template-parts/content', 'tag' ); ?>
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

<?php get_footer(); ?>
