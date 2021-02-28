<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php neve_body_attrs(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <a class="screen-reader-text" href="#content" tabindex="0">
		<?php echo __( 'Przejdź do treści', 'neve-child' ); ?>
	</a>

    <div class="container">
        <?php require CHILD_PARTS . '/logo.php'; ?>

        <?php require CHILD_PARTS . '/navigation.php'; ?>
    </div>
</header>

<main id="content" class="neve-main" role="main">

