<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css?v=1.0.0">

  <?php
  if ($post->post_parent) {
    get_template_part('page-parts/' . get_the_title($post->post_parent) . '-' . $post->post_name . '-head');
  } else {
    get_template_part('page-parts/' . $post->post_name . '-head');
  }
  ?>
</head>

<body>
  <header>
    <h1>this is theme header</h1>
    <div><a href="/">Go Home</a></div>
    <div><a href="/blog/">Go To Blog</a></div>
  </header>