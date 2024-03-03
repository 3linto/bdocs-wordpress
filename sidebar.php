<div class="site-sidebar">

<button class="site-sidebar__close">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
    </svg>
</button>

<div class="search">
    <div class="search__container">
        <button class="search__button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            <span>Quick search...</span>
            <span>Ctrl K</span>
        </button>
    </div>
</div>

<nav class="menu-sidebar">

    <?php 
    $args = [
        'container' => 'ul',
        'menu_class' => 'menu-sidebar__list',
        'theme_location' => 'sidebar_menu'
    ];

    wp_nav_menu($args) 
    ?> 

    <!-- <ul class="menu-sidebar__list">
        <li class="menu-sidebar__item menu-sidebar__item--current">
            <a href="" class="menu-sidebar__link">
                <div class="menu-sidebar__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>
                </div>
                <span class="menu-sidebar__text">Documentation</span>
            </a>
        </li>
        <li class="menu-sidebar__item">
            <a href="" class="menu-sidebar__link">
                <div class="menu-sidebar__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                    </svg>
                </div>
                <span class="menu-sidebar__text">Components</span>
            </a>
        </li>
        <li class="menu-sidebar__item">
            <a href="" class="menu-sidebar__link">
                <div class="menu-sidebar__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8.25V18a2.25 2.25 0 0 0 2.25 2.25h13.5A2.25 2.25 0 0 0 21 18V8.25m-18 0V6a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 6v2.25m-18 0h18M5.25 6h.008v.008H5.25V6ZM7.5 6h.008v.008H7.5V6Zm2.25 0h.008v.008H9.75V6Z" />
                    </svg>
                </div>
                <span class="menu-sidebar__text">Templates</span>
            </a>
        </li>
        <li class="menu-sidebar__item">
            <a href="" class="menu-sidebar__link">
                <div class="menu-sidebar__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                    </svg>
                </div>
                <span class="menu-sidebar__text">Screencasts</span>
            </a>
        </li>
        <li class="menu-sidebar__item">
            <a href="" class="menu-sidebar__link">
                <div class="menu-sidebar__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.25 9.75 16.5 12l-2.25 2.25m-4.5 0L7.5 12l2.25-2.25M6 20.25h12A2.25 2.25 0 0 0 20.25 18V6A2.25 2.25 0 0 0 18 3.75H6A2.25 2.25 0 0 0 3.75 6v12A2.25 2.25 0 0 0 6 20.25Z" />
                    </svg>
                </div>
                <span class="menu-sidebar__text">Playground</span>
            </a>
        </li>
        <li class="menu-sidebar__item">
            <a href="" class="menu-sidebar__link">
                <div class="menu-sidebar__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 0 0 2.25-2.25V6a2.25 2.25 0 0 0-2.25-2.25H6A2.25 2.25 0 0 0 3.75 6v2.25A2.25 2.25 0 0 0 6 10.5Zm0 9.75h2.25A2.25 2.25 0 0 0 10.5 18v-2.25a2.25 2.25 0 0 0-2.25-2.25H6a2.25 2.25 0 0 0-2.25 2.25V18A2.25 2.25 0 0 0 6 20.25Zm9.75-9.75H18a2.25 2.25 0 0 0 2.25-2.25V6A2.25 2.25 0 0 0 18 3.75h-2.25A2.25 2.25 0 0 0 13.5 6v2.25a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                </div>
                <span class="menu-sidebar__text">Resources</span>
            </a>
        </li>
        <li class="menu-sidebar__item">
            <a href="" class="menu-sidebar__link">
                <div class="menu-sidebar__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 12a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375M21 12c0 4.556-4.03 8.25-9 8.25a9.764 9.764 0 0 1-2.555-.337A5.972 5.972 0 0 1 5.41 20.97a5.969 5.969 0 0 1-.474-.065 4.48 4.48 0 0 0 .978-2.025c.09-.457-.133-.901-.467-1.226C3.93 16.178 3 14.189 3 12c0-4.556 4.03-8.25 9-8.25s9 3.694 9 8.25Z" />
                    </svg>
                </div>
                <span class="menu-sidebar__text">Community</span>
            </a>
        </li>
    </ul> -->
</nav>

<?php 
if ( is_active_sidebar( 'doc-sidebar' )) :

    dynamic_sidebar( 'doc-sidebar' );

endif;
?>

<!-- <nav class="chapter">
    <h5 class="chapter__title">Getting started</h5>
    <ul class="chapter__list">
        <li class="chapter__item chapter__item--current"><a href="" class="chapter__link">Installation</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Editor setup</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Using with preprocessors</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Optimizing for Production</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Browser Support</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Upgrade Guide</a></li>
    </ul>
</nav>

<nav class="chapter">
    <h5 class="chapter__title">Core concepts</h5>
    <ul class="chapter__list">
        <li class="chapter__item"><a href="" class="chapter__link">Installation</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Editor setup</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Using with preprocessors</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Optimizing for Production</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Browser Support</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Upgrade Guide</a></li>
    </ul>
</nav>

<nav class="chapter">
    <h5 class="chapter__title">Customization</h5>
    <ul class="chapter__list">
        <li class="chapter__item"><a href="" class="chapter__link">Installation</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Editor setup</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Using with preprocessors</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Optimizing for Production</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Browser Support</a></li>
        <li class="chapter__item"><a href="" class="chapter__link">Upgrade Guide</a></li>
    </ul>
</nav> -->

</div>
