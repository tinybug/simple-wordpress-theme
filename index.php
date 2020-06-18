<?php

/**
 * The posts page template file
 */

get_header();
?>

<main id="main" class="site-main" role="main">

	<?php
	if (have_posts()) : while (have_posts()) : the_post();

			get_template_part('template-parts/content', 'list');

		endwhile;

		the_posts_pagination(array(
			'prev_text' => __('Prev'),
			'next_text' => __('Next'),
		));

	endif;
	?>

</main>

<?php
get_footer();
