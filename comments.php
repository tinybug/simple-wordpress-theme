<?php

/**
 * The template for displaying comments
 * 
 */

if (post_password_required()) {
  return;
}
?>

<div>
  <?php
  if (have_comments()) : ?>
    <h2 class="comments-title">Comments</h2>

    <?php the_comments_navigation(); ?>

    <ul class="comment-list">
      <?php
      wp_list_comments("type=comment&callback=mytheme_comment");
      ?>
    </ul>

    <?php
    the_comments_navigation();

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open()) : ?>
      <p class="no-comments">Comments are closed</p>
  <?php
    endif;
  endif;
  $comments_args = array(
    // Change the title of send button 
    'label_submit' => __('Submit Comment', 'textdomain'),
    // Change the title of the reply section
    'title_reply' => __('Leave a Comment', 'textdomain'),
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
  );
  comment_form($comments_args);
  ?>
</div>