 <!doctype html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
<body>
<?php wp_body_open(); ?>
    <header class="site-header">
        <a href="<?php echo get_home_url();?>">
            <div class="site-header__logo">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/logo.png'?>">
            </div>
        </a>
    </header>