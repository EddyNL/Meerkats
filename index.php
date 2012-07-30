<?php get_header(); ?>

<!--posts-->

<section class="main" >
	<?php while ( have_posts() ) : the_post() ?>
	<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p id="date"><?php the_date(); ?></p>
		<div><?php the_content(); ?></div>
		<p><?php the_tags('Tags: ', ', ', '<br />'); ?> </p>
	</article>
	
	<?php endwhile; ?>
	
	<nav>
		<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</nav>
	
</section>

<!--end posts-->

<?php get_sidebar() ?>

<?php get_footer(); ?>
