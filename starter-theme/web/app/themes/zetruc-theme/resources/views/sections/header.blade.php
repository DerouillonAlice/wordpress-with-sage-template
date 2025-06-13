<header class="banner">

    @if (has_nav_menu('header_navigation'))
    <nav class="nav-header" aria-label="{{ wp_get_nav_menu_name('header_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'header_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
    @endif
</header>
