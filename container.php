<?php 
  // Template Name: Container Page
  // Template Post Type: post, page
?>



<?php get_header(); ?>


  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
    <?php else : ?>
      <p><?php __('No Page Found') ?></p>
    <?php endif; ?>


<?php get_footer(); ?>