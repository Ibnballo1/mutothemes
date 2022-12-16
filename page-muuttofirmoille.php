<?php
  get_header();

  if (have_posts()):
    while (have_posts()): the_post(); ?>
        <article class="post">
          <?php echo get_template_part( 'template-part/post', 'page'); ?>
        </article>
    <?php endwhile;
    else:
      echo '<p>No content found</p>';
    endif;

  get_footer();
?>