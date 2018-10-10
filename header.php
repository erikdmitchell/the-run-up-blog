<!doctype html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php wp_head(); ?>
    </head>

    <body <?php body_class( 'tru-blog' ); ?>>

        <nav class="navbar tru-blog-header-nav clearfix">
            <div class="primary-nav">
                <div class="header-logo">
                    <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/inc/images/logos/logo-sm.png " height="93" width="204" alt="the run up logo" /></a>
                </div>
            </div>
        </nav>
