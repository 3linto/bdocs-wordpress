<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="container">

    <dialog id="search-modal" class="search-modal">
        <div class="search-modal__inner">
            <form action="<?php echo home_url( '/' ) ?>" method="GET" class="search-modal__form">
                <label for="search-input" class="search-modal__label">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </label>
                <input id="search-input" type="text" class="search-modal__input" placeholder="Search documentation" name="s">
            </form>
            <button class="search-modal__close">esc</button>
        </div>
    </dialog>

    <div class="overlay"></div>

    <nav class="menu-responsive">
        <button class="menu-responsive__close">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
        <?php 
            
            $args = [
                'container'         => 'ul',           // Element wrapping the UL
                'menu_class'        => 'menu-responsive__list',    // UL class
                'theme_location'    => 'top_menu'
            ];

            wp_nav_menu( $args ) 
            
        ?>
        <!-- <ul class="menu-responsive__list">
            <li class="menu-responsive__item"><a href="" class="menu-responsive__link">Docs</a></li>
            <li class="menu-responsive__item"><a href="" class="menu-responsive__link">Components</a></li>
            <li class="menu-responsive__item"><a href="" class="menu-responsive__link">Blog</a></li>
            <li class="menu-responsive__item"><a href="" class="menu-responsive__link">Showcase</a></li>
            <li class="menu-responsive__item"><a href="" class="menu-responsive__link">Github</a></li>
        </ul> -->
        <div class="menu-responsive__theme">
            <label for="theme-select">Switch theme</label>
            <div class="theme">
                <div class="theme__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                    </svg>
                </div>
                <select id="theme-select">
                    <option value="light">Light</option>
                    <option value="dark">Dark</option>
                    <option value="system" selected>System</option>
                </select>
                <div class="theme__select-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>                                  
                </div>
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <header class="site-header">
        <div class="site-header__inner">
            <figure class="site-header__branding">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <a href="<?php echo home_url( '/' )?>"><?php bloginfo('name') ?></a>
                <?php endif; ?>

                <?php 
                
               // if ( has_custom_logo() ) {
              //      the_custom_logo()
               // } else {
               //     echo '<a href="' . home_url('/') . '">' . get_bloginfo('name') . '</a>';
              //  }
                
                ?>
            </figure>

            <!-- <a href="<?php echo home_url( '/' ) ?>" class="site-header__branding">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m6.75 7.5 3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0 0 21 18V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v12a2.25 2.25 0 0 0 2.25 2.25Z" />
                </svg>                                         
                bDocs
            </a> -->
            <!-- ... (Mer saker) -->

            <?php 
            
            $args = [
                'container'         => 'nav',           // Element wrapping the UL
                'container_class'   => 'menu',          // Class of that Element
                'menu_class'        => 'menu__list',    // UL class
                'theme_location'    => 'top_menu'
            ];

            wp_nav_menu( $args ) 
            
            ?>

            <!-- <nav class="menu">
                <ul class="menu__list">
                    <li class="menu__item"><a href="" class="menu__link">Docs</a></li>
                    <li class="menu__item"><a href="" class="menu__link">Components</a></li>
                    <li class="menu__item"><a href="" class="menu__link">Blog</a></li>
                    <li class="menu__item"><a href="" class="menu__link">Showcase</a></li>
                </ul>
            </nav> -->

            <div class="site-header__toolbar">
                <div class="darkmode">
                    <button class="darkmode__button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                        </svg>                       
                    </button>
                    <ul class="darkmode__list">
                        <li class="darkmode__item">
                            <button class="darkmode__theme" data-theme="light">
                                <div class="darkmode__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                                    </svg>
                                </div>
                                <span class="darkmode__label">Light</span>                                 
                            </button>
                        </li>
                        <li class="darkmode__item">
                            <button class="darkmode__theme" data-theme="dark">
                                <div class="darkmode__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                                    </svg>
                                </div>
                                <span class="darkmode__label">Dark</span> 
                            </button>
                        </li>
                        <li class="darkmode__item darkmode__item--active">
                            <button class="darkmode__theme" data-theme="system">
                                <div class="darkmode__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                                    </svg>
                                </div>
                                <span class="darkmode__label">System</span> 
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="social">
                    <ul class="social__list">
                        <li class="social__item">
                            <a href="" class="social__link"><svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 fill-slate-900"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.607 9.607 0 0 1 12 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48 3.97-1.32 6.833-5.054 6.833-9.458C22 6.463 17.522 2 12 2Z"></path></svg></a>
                        </li>
                    </ul>
                </div>

                <div class="site-header__search">
                    <button class="site-header__search-button">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </div>

                <button class="menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                    </svg>
                </button>
            </div>
            
        </div>

        <div class="site-header__responsive">
            <button class="sidebar-button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>                      
            </button>
            <div class="breadcrumb">
                <span><?php echo get_the_title($post->post_parent) ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                </svg>                                            
                <span><?php the_title() ?></span>
            </div>
        </div>


    </header>

    <!-- MAIN LAYOUT -->
    <div class="site-container">

        <?php get_sidebar(); ?>

        <div class="site-content">