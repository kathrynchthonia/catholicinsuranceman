<?php get_header(); ?>


  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
    <div class="container flow-text">
      <h2 class="flow-text center">
        <a class='white-text bold amber darken-2 z-depth-2 hoverable' href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
        </a>
      </h2>
      <p class="flow-text">
      by 
      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
        <?php the_author(); ?>
      </a>
      </p>
      <?php if(has_post_thumbnail()) : ?>
      <div class="container responsive-img center post-thumb">
        <?php the_post_thumbnail(); ?>
        </div>
      <?php endif; ?>
      <?php the_excerpt(); ?>
      </div>
    <?php endwhile; ?>
    <?php else : ?>
      <p><?php __('No Posts Found') ?></p>
    <?php endif; ?>




<?php get_footer(); ?>