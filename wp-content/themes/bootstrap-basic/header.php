<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simplicity</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">

    <!-- Bootstrap -->
    <link href="<?php echo get_stylesheet_directory_uri() . '/css/bootstrap.min.css' ?>" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/font-awesome.min.css' ?>"> 

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>
<body>

    <div class="container-fluid">
        
        <!-- ================= navbar =================  -->
            <nav class="navbar navbar-default navbar-fixed-top transparent">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <?php
                            wp_nav_menu( array(
                                'theme_location' => 'top_menu',
                                'depth' => 2,
                                'container' => false,
                                'menu_class' => 'nav navbar-nav',
                                'fallback_cb' => 'wp_page_menu'
                                ));
                        ?>
                        
                        <?php $search_terms = htmlspecialchars( $_GET["s"] ); ?>
                        
                        <ul class="nav navbar-nav navbar-right">
                            <form class="navbar-form" role="form" action="<?php bloginfo('siteurl'); ?>/" id="searchform" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="s" name="s" placeholder="Search"<?php if ( $search_terms !== '' ) { echo ' value="' . $search_terms . '"'; } ?> />
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </ul>
                    </div>
                </div>
            </nav>
            
        
