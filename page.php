<?php get_header(); ?>

<?php
if ($post->post_parent) {
  get_template_part('page-parts/' . get_the_title($post->post_parent) . '-' . $post->post_name . '-hero');
} else {
  get_template_part('page-parts/' . $post->post_name . '-hero');
}
?>

<?php get_footer(); ?>