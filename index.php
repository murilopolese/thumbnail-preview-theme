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
            <section class="image">
                <img src="#<?php //header_image(); ?>" width="200" height="200" />
            </section>
            <section class="text">
                <h1>
                    <?php bloginfo( 'name' ); ?>
                </h1>
                <h2><?php bloginfo( 'description' ); ?></h2>
                <p>Bio</p>
            </section>
        </header>
        
        <div class="thumbnail-row">
            <section>
                <article>
                    <a href="#">
                        <img src="#" width="100%" height="180"/>
                    </a>
                </article>
                <article>
                    <a href="#">
                        <img src="#" width="100%" height="180"/>
                    </a>
                </article>
                <article>
                    <a href="#">
                        <img src="#" width="100%" height="180"/>
                    </a>
                </article>
                <article>
                    <a href="#">
                        <img src="#" width="100%" height="180"/>
                    </a>
                </article>
            </section>
        </div>

        <div class="preview-full-width">
            <div class="preview-row">
                <section>
                    <article>
                        <figure>
                            <img src="#" width="100%" height="360"/>
                        </figure>
                        <aside>
                            <h1>Title</h1>
                            <p>
                                Paragraph
                            </p>
                            <p>
                                <a href="#">Link</a>
                            </p>
                        </aside>
                    </article>
                </section>
            </div>
        </div>

        <footer>

        </footer>

        <script src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/jquery.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/main.js"></script>

        <?php wp_footer(); ?>
    </body>
</html>
