<footer>
  <p>this is simple wordpress footer</p>
</footer>

<?php
if ($post->post_parent) {
  get_template_part('page-parts/' . get_the_title($post->post_parent) . '-' . $post->post_name . '-footer');
} else {
  get_template_part('page-parts/' . $post->post_name . '-footer');
}
?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js?v=1.0.0"></script>

</body>

</html>