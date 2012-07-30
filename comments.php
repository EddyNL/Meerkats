<div class="comments">
  <?php if (have_comments()): ?>
    <h3 id="comments-title"><?php number_of_responses(); ?></h3>
    
    <ol class="commentlist">
      <?php wp_list_comments(); ?>
    </ol>
  <?php endif; ?>

<nav>
		<div class="alignright"><p><?php paginate_comments_links( 'Older Comments È', 5); ?></p></div>
	</nav>

<?php wp_link_pages( $args ); ?>

</div>
