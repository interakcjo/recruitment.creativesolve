<div class="site-header-logo">
    <?php if(get_field('logo', 'option') != null) :
        $logoURL = get_field('logo', 'option')['url'];
        $logoALT = get_field('logo', 'option')['alt'];
    ?>

    <a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home" class="site-header-logo__anchor" title='<?= get_bloginfo('name'); ?>'>
        <img src="<?= $logoURL; ?>" alt="<?= $logoALT; ?>" class="site-header-logo__image">
    </a>

    <?php else : ?>

    <a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home" class="site-header-logo__anchor" title='<?= get_bloginfo('name'); ?>'>
        <span class="site-header-logo__title"><?= get_bloginfo('name'); ?></span>
    </a>

    <?php endif; ?>
</div>