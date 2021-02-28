<nav id="site-navigation" class="site-header-nav main-navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
        <span class='screen-reader-text'><?= __( 'Menu główne', 'neve-child' ); ?></span>

        <span class="menu-toggle__line"></span>
        <span class="menu-toggle__line"></span>
        <span class="menu-toggle__line"></span>
    </button>

    <?= function_exists('display_custom_theme_menu') ? display_custom_theme_menu('menu-1') : null; ?>
</nav><!-- #site-navigation -->