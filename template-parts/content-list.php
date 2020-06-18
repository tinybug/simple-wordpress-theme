<?php

/**
 * Template part for displaying archive
 */

?>
<article id="post-<?php the_ID(); ?>" class="entry">
	<a href="<?php the_permalink(); ?>">
		<p><?php the_title(); ?></p>
	</a>

	<div>
		<?php the_excerpt(); ?>
	</div>
</article>