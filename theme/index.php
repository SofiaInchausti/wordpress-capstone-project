<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> <!-- Hoja de estilos -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <!-- Header -->
        <header>
            <section class="top-bar">
                <div class="container">
                    <div>
                        <div class="brand">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <?php if (has_custom_logo()): ?>
                                    <?php the_custom_logo(); ?>
                                <?php else: ?>
                                    <p class="site-title"><?php bloginfo('title'); ?></p>
                                    <span><?php bloginfo('description'); ?></span>
                                <?php endif; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        
        <!-- Main Content -->
        <div>
            <main>
                <h1>Hello world</h1>
            </main>
        </div>
        
        <!-- Footer -->
        <footer id="colophon" class="site-footer">
            <div class="container">
                <div class="footer-content">
                    <p class="footer-text">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'capstone-project'); ?></p>
                    <nav>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'menu_class'     => 'footer-menu',
                            'container'      => '',
                            'fallback_cb'    => false,
                        ));
                        ?>
                    </nav>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>

</html>
