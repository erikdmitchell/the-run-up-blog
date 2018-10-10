<div class="container">
    <div class="row">
        <div class="col-12">
            <?php tru_blog_post_thumbnail( 'single' ); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <?php
            while ( have_posts() ) :
                the_post();
                ?>
                    
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'tru-blog-single' ); ?>>
                    <header class="entry-header">
                        <?php	the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                
                        <div class="entry-meta">
                            <?php the_time( 'F j, Y' ); ?>
                        </div><!-- .entry-meta -->
                    </header><!-- .entry-header -->
                
                    <div class="entry-content">
                        <?php
                            the_content( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'tru-blog' ) );
                            wp_link_pages(
                                array(
                                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tru-blog' ) . '</span>',
                                    'after'       => '</div>',
                                    'link_before' => '<span>',
                                    'link_after'  => '</span>',
                                )
                            );
                        ?>
                    </div><!-- .entry-content -->
                                        
                    <?php get_template_part( 'template-parts/content-single-blog', 'pr' ); ?> 
                    
                    <?php get_template_part( 'template-parts/content-single-blog', 'predictions' ); ?>                                      
                
                    <footer class="container entry-meta">
                        <div class="row tags-list">
                            <div class="tags-title">Tags</div>
                            
                            <?php the_tags( '<div class="tag-links">', ' ', '</div>' ); ?>
                        </div>
                        
                        <div class="row categories-list">
                            <div class="categories-title">Categories</div>
                        
                            <div class="categories-link">
                                <?php tru_blog_post_categories( ' ', 1 ); ?>
                            </div>
                        </div>
                    </footer>
                </article><!-- #post-## -->
                                
            <?php endwhile; ?>
        </div>
    </div>
</div><!-- .container -->
