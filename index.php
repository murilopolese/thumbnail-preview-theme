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

        <script src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/modernizr.custom.js"></script>

        <!--=== TITLE ===-->
        <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

        <!--=== WP_HEAD() ===-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <header>
            <section>
                <article>
                    <?php if( get_header_image() ) : ?>
                        <img src="<?php header_image(); ?>" />
                    <?php else : ?>
                        <h1>
                            <?php bloginfo( 'name' ); ?>
                        </h1>
                        <h2><?php bloginfo( 'description' ); ?></h2>
                    <?php endif; ?>
                </article>
            </section>
        </header>


        <?php
        $posts_per_page = 4;
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => $posts_per_page
        );
        $posts = new WP_Query( $args );
        ?>

        <?php for( $i = 1; $i <= $posts->max_num_pages; $i++ ) : ?>
            <?php
            $args = array(
                'post_type'         => 'post',
                'posts_per_page'    => $posts_per_page,
                'paged'             => $i
            );
            $posts = new WP_Query( $args );
            ?>

            <div class="thumbnail-row">
                <section>
                    <?php while( $posts->have_posts() ) : ?>
                        <?php $posts->the_post(); ?>
                        <?php
                            // Skip posts without thumbnail
                            if( !has_post_thumbnail() ) continue;
                            // Get large thumbnail url
                            $thumbnail = reset(
                                wp_get_attachment_image_src(
                                    get_post_thumbnail_id(),
                                    'thumbnail'
                                )
                            );
                        ?>
                        <article>
                            <a href="#post-<?php the_ID(); ?>">
                                <img src="<?php echo $thumbnail; ?>" width="100%" />
                            </a>
                        </article>
                    <?php endwhile; ?>
                </section>
            </div>

            <div class="preview-full-width">
                <div class="preview-row">
                    <?php while( $posts->have_posts() ) : ?>
                        <?php $posts->the_post(); ?>
                        <?php
                        	// Skip posts without thumbnail
                        	if( !has_post_thumbnail() ) continue;
                        	// Get large thumbnail url
                        	$large_image_url = reset(
                                wp_get_attachment_image_src(
                            		get_post_thumbnail_id(),
                            		'large'
                            	)
                            );
                            $post_custom = get_post_custom();
                            if( empty( $post_custom[ 'post_link' ] ) ) {
                                $post_custom[ 'post_link' ] = array( '#' );
                            }
                            if( empty( $post_custom[ 'post_link_text' ] ) ) {
                                $post_custom[ 'post_link_text' ] = array( 'View more' );
                            }
                            $post_custom[ 'post_link' ] = reset( $post_custom[ 'post_link' ] );
                            $post_custom[ 'post_link_text' ] = reset( $post_custom[ 'post_link_text' ] );
                        ?>
                        <section id="post-<?php the_ID(); ?>">
                            <article>
                                <figure>
                                    <img src="<?php echo $large_image_url; ?>"
                                        width="100%" />
                                </figure>
                                <aside>
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_content(); ?>
                                    <?php if( $post_custom[ 'post_link' ] != '#' ) : ?>
                                        <p>
                                            <a href="<?php echo $post_custom[ 'post_link' ]; ?>">
                                                <?php echo $post_custom[ 'post_link_text' ]; ?>
                                            </a>
                                        </p>
                                    <?php endif; ?>
                                </aside>
                            </article>
                        </section>
                    <?php endwhile; ?>
                </div>
            </div>

        <?php endfor; ?>

        <footer>
            <?php
            $args = array(
                'post_type'         => 'page',
                'posts_per_page'    => -1
            );
            $posts = new WP_Query( $args );
            ?>
            <?php while( $posts->have_posts() ) : ?>
                <?php $posts->the_post(); ?>
                <section>
                    <article>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </article>
                </section>
            <?php endwhile; ?>

        </footer>

        <script src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/jquery.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/main.js"></script>

        <?php wp_footer(); ?>
    </body>
</html>
