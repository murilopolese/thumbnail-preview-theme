<!DOCTYPE html>
<html lang="en">
    <head>
        <!--=== META TAGS ===-->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Thumbnail Grid with Expanding Preview" />
        <meta name="keywords" content="thumbnails, grid, preview, google image search, jquery, image grid, expanding, preview, portfolio" />
        <meta name="author" content="Murilo Polese" />

        <!--=== LINK TAGS ===-->
        <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/build.css" />

        <script src="<?php bloginfo( 'template_directory' ); ?>/js/modernizr.custom.js"></script>

        <!--=== TITLE ===-->
        <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

        <!--=== WP_HEAD() ===-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="container">
            <!-- Codrops top bar -->
            <header class="clearfix">
                <?php if( get_header_image() ) : ?>
                    <img src="<?php header_image(); ?>"
                        height="<?php echo get_custom_header()->height; ?>"
                        width="<?php echo get_custom_header()->width; ?>"
                        alt="" />
                <?php else : ?>
                    <h1>
                        <?php bloginfo( 'name' ); ?>
                        <span><?php bloginfo( 'description' ); ?></span>
                    </h1>
                <?php endif; ?>
            </header>
            <div class="main">
                <ul id="og-grid" class="og-grid">
                    <?php while( have_posts() ): the_post(); ?>
                        <?php if( !has_post_thumbnail() ) continue; ?>
                        <?php
                        $large_image_url = wp_get_attachment_image_src(
                            get_post_thumbnail_id(),
                            'large'
                        );
                        $post_custom = get_post_custom();
                        if( empty( $post_custom[ 'post_link' ] ) ) {
                            $post_custom[ 'post_link' ] = array();
                            $post_custom[ 'post_link' ][] = '#';
                        }
                        if( empty( $post_custom[ 'post_link_text' ] ) ) {
                            $post_custom[ 'post_link_text' ] = array();
                            $post_custom[ 'post_link_text' ][] = '';
                        }
                        ?>
                        <li>
                            <a href="<?php echo $post_custom[ 'post_link' ][0]; ?>"
                                data-largesrc="<?php echo $large_image_url[0]; ?>"
                                data-title="<?php the_title() ?>"
                                data-description="<?php echo get_the_content() ?>"
                                data-linktext="<?php echo $post_custom[ 'post_link_text' ][0]; ?>"
                                >
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div><!-- /container -->
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/grid.js"></script>
        <script>
            $(function() {
                Grid.init();
            });
        </script>
        <?php wp_footer(); ?>
    </body>
</html>
