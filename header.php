<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="es"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <meta name="description" content="">
    <meta name="author" content="Santiago Vellini">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/base.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/skeleton.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/layout.css">
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <header class="sixteen columns">
            <h1 class="logo">Santiago Vellini</h1>
        </header>

        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            <div class="social">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"></a>
                <a href="http://instagram.com/santiagovellini"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.png"></a>
                <a href="skype://santiago.vellini"><img src="<?php echo get_template_directory_uri(); ?>/images/skype.png"></a>
            </div>
        </nav>