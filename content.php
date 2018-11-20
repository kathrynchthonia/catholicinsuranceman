<div class="container flow-text">
      <h2 class="flow-text center">
        <?php if(is_single()) : ?>
          <div class='white-text bold amber darken-2 z-depth-2'>
          <?php the_title(); ?>
          </div>
        <?php else : ?>
          <a class='white-text bold amber darken-2 z-depth-2 hoverable' href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a>
        <?php endif; ?>
        
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

      <?php if(is_single()) : ?>
          <?php the_content(); ?>
        <?php else : ?>
          <?php the_excerpt(); ?>
        <?php endif; ?>

       <?php if(is_single()) : ?>
          <?php comments_template(); ?>
        <?php endif; ?>
      
      </div>