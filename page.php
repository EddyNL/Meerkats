<?php get_header(); ?>

<!--posts-->

<section class="main">
	<?php the_post(); ?>
	<article class="post">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div><?php the_content(); ?></div>
	
	</article>
</section>

<!--end posts-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>