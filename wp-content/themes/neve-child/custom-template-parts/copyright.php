<?php if(get_field('copyright', 'option') != null) : $copyright = get_field('copyright', 'option'); ?>

<p class="site-footer__copyright"><?= $copyright; ?></p>

<?php endif; ?>