<?php if( have_rows('social_media', 'option') ) : ?>

<ul class="social-media">
    <?php while( have_rows('social_media', 'option') ) : the_row();
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $url = get_sub_field('url');

        if( ( $image != null && $title != null && $url != null ) ) :
    ?>

    <li class="social-media__item">
        <a target="_blank" href="<?= $url; ?>" class="social-media__anchor" title="<?= $title; ?>">
            <span class="screen-reader-text social-media__title"><?= $title; ?></span>
            <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>" class="social-media__image">
        </a>
    </li>

    <?php endif; endwhile; ?>
</ul>

<?php endif; ?>