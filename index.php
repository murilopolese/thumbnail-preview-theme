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

        <!--=== SCRIPT TAGS ===-->
        <script>
            // Expose path to Javascript
            var template_directory = "<?php bloginfo( 'template_directory' ); ?>";
            var wp_ajax_url = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
        </script>


        <!--=== LINK TAGS ===-->        
        <link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/default.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/css/component.css" />
        
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/modernizr.custom.js"></script>
        
        <!--=== TITLE ===-->
        <title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

        <!--=== WP_HEAD() ===-->
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="container"> 
            <!-- Codrops top bar -->
            <header class="clearfix">
                <h1>
                    <?php bloginfo( 'name' ); ?>
                    <span><?php bloginfo( 'description' ); ?></span>
                </h1>
            </header>
            <div class="main">
                <ul id="og-grid" class="og-grid">
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/2.jpg" data-title="Veggies sunt bona vobis" data-description="Komatsuna prairie turnip wattle seed artichoke mustard horseradish taro rutabaga ricebean carrot black-eyed pea turnip greens beetroot yarrow watercress kombu.">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/thumbs/2.jpg" alt="img02"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/3.jpg" data-title="Dandelion horseradish" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/thumbs/3.jpg" alt="img03"/>
                        </a>
                    </li>
                    <li>
                        <a href="http://cargocollective.com/jaimemartinez/" data-largesrc="images/1.jpg" data-title="Azuki bean" data-description="Swiss chard pumpkin bunya nuts maize plantain aubergine napa cabbage soko coriander sweet pepper water spinach winter purslane shallot tigernut lentil beetroot.">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/thumbs/1.jpg" alt="img01"/>
                        </a>
                    </li>
                </ul>
                <p>
                    Some final credits to 
                    <a href="#">
                        Someone
                    </a>
                </p>
            </div>
        </div><!-- /container -->
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/grid.js"></script>
        <script>
            $(function() {
                Grid.init();
            });
        </script>
    </body>
</html>