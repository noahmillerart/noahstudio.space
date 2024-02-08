<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="<?php echo esc_url(get_bloginfo('stylesheet_url')); ?>" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body <?php body_class(); ?>>



    <div class="container text-center p-5" id="header"><!--Header-->

        <a href="<?php echo home_url(); ?>/" class="home-link">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/LogoNS_small_color.png'); ?>" alt="Logo" class="img-fluid">
        </a>         
        
        <nav class="navbar navbar-expand">
            <div class="container justify-content-center p-3">
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon border-0"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center p-3" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item <?php echo (is_page(6)) ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?php echo get_permalink(6); ?>">About</a>
                        </li>
                        <li class="nav-item dropdown <?php echo (is_page(array(49, 51, 53, 57)) || in_category(array('illustration', 'animation', 'design', 'books'))) && !is_front_page() ? 'active' : ''; ?>">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Projects</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item <?php echo (is_page(49) || in_category('illustration')) ? 'active' : ''; ?>">
                                    <a href="<?php echo get_permalink(49); ?>">Illustration</a>
                                </li>
                                <li class="dropdown-item <?php echo (is_page(51) && !is_front_page()) || (in_category('animation') && !is_front_page()) ? 'active' : ''; ?>">
                                    <a href="<?php echo get_permalink(51); ?>">Animation</a>
                                </li>                                
                                <li class="dropdown-item <?php echo (is_page(53) || in_category('design')) ? 'active' : ''; ?>">
                                    <a href="<?php echo get_permalink(53); ?>">Design</a>
                                </li>
                                <li class="dropdown-item <?php echo (is_page(57) || in_category('books')) ? 'active' : ''; ?>">
                                    <a href="<?php echo get_permalink(57); ?>">Books</a>
                                </li>
                            </ul>                                                     
                        </li>                                                                                                         
                        <li class="nav-item <?php echo (is_page(8)) ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?php echo get_permalink(8); ?>" id="contact-link">Contact</a>
                        </li>
                        <li class="nav-item <?php echo (is_page(55)) ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?php echo get_permalink(55); ?>" rel="noopener">Store</a>
                        </li>
                        <li class="nav-item external-link pe-1">
                            <a class="nav-link" href="https://noahmiller.art" target="_blank" rel="noopener">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>                    
            
    </div><!--End Header-->