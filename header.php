<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <?php if (  is_front_page() ): ?>
        <header>
        <!-- Menu de navegacion-->
        <div class="navigation-main-menu">
             <div class="navigation-wrap">
                    <nav id="site-navegation" class="main-navigation">
                        <?php if ( has_nav_menu( 'main-menu' ) ):?>
                           <?php wp_nav_menu([
                             'theme_location' => 'main-menu',
                              'menu_id' => 'main-menu'
                           ]);?>
                        <?php endif; ?>
                        <?php if ( has_nav_menu( 'mobile-menu' ) ):?>
                             <?php wp_nav_menu([
                              'theme_location' => 'mobile-menu',
                             'menu_id' => 'mobile-menu'
                               ]);?>
                        <?php endif; ?>
                    </nav>
            </div>
        </div> 

        <!-- Imagen y titulo  -->
        <div class="site-branding">
            <h1 class="site-title has-domestika-white-color"><a href="<?php echo get_home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="site-description has-domestika-white-color"><?php bloginfo( 'description' ); ?></p>
        </div>
        
        <div class="block"></div>

        </header>
    <?php else: ?>
        <header>
        <div class="block"></div>
        <!-- Imagen y titulo  -->
        <div class="site-branding">
            <h1 class="site-title"><a href="<?php echo get_home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
        </div>
        
        <!-- Menu de navegacion-->
        <div class="navigation-main-menu">
             <div class="navigation-wrap">
                    <nav id="site-navegation" class="main-navigation">
                        <?php if ( has_nav_menu( 'main-menu' ) ):?>
                           <?php wp_nav_menu([
                             'theme_location' => 'main-menu',
                              'menu_id' => 'main-menu'
                           ]);?>
                        <?php endif; ?>
                        <?php if ( has_nav_menu( 'mobile-menu' ) ):?>
                             <?php wp_nav_menu([
                              'theme_location' => 'mobile-menu',
                             'menu_id' => 'mobile-menu'
                               ]);?>
                        <?php endif; ?>
                    </nav>
            </div>
        </div> 
        </header>
    <?php endif; ?>
<div id="content <?php echo is_front_page() ? 'main-front-page' : ''; ?>" class="row ">

    
    
