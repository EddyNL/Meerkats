<!DOCTYPE HTML>

<html <?php language_attributes(); ?> >

<head>

<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 

	
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]--><!-- this makes HTML5 elements like section a.OK for IE -->

<!--[if lt IE 9]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie.css" media="all" /><![endif]-->

<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>

</head>
<body <?php body_class(); ?>>

<section class="wrapper1"><!--wrapper (for centering)-->

<div class="wrapper2"><!--wrapper 2 (for everything except the footer)-->

<!--header-->

	<header class="header">
		<h1 id="logo"><a href="<?php bloginfo('url'); ?>/" title=""><?php bloginfo( 'title' ); ?></a></h1>
		<p class="strapline"><?php bloginfo( 'description' ); ?></p>
	</header>
	
	<nav class="navwrapper">
			<?php wp_nav_menu(); ?>
	</nav>

<!--end header-->
