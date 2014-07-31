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
            <img src="<?php header_image(); ?>"
                height="<?php echo get_custom_header()->height; ?>"
                width="<?php echo get_custom_header()->width; ?>"
                alt="" />
            <h1>
                <?php bloginfo( 'name' ); ?>
            </h1>
            <h2><?php bloginfo( 'description' ); ?></h2>
        </header>
        <main>

            <section class="thumbnail-row">
                <article id="1">
                    <img src="#" alt="" title="" />
                </article>
            </section>

            <section class="preview-row">
                <figure>
                    <img src="#" alt="" title="" />
                </figure>
                <article>
                    <h1>Title</h1>
                    <p>
                        Paragraph
                    </p>
                    <p>
                        <a href="#">Link</a>
                    </p>
                </article>
            </section>

        </main>
        <footer>

        </footer>

        <script src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/jquery.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/main.js"></script>

        <?php wp_footer(); ?>
    </body>
</html>
