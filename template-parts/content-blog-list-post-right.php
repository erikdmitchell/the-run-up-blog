<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog-landing-right' ); ?></a>

<div class="title">
    <a href="<?php the_permalink(); ?>"><?php the_title( '<h2 class="blog-post-right">', '</h2>' ); ?></a>
</div>

<div class="entry-meta">
    <?php tru_blog_theme_posted_on(); ?>
</div><!-- .entry-meta -->
