<?php get_header(); ?>

<section id="work">
  <div class="container">
      <h2>WORK</h2>
      <div class="work-list">
        <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>

        <a href="<?php the_permalink(); ?>" class="work-item">
          
        <div class="work-thumb">
          <?php if(has_post_thumbnail()): ?>
            <?php the_post_thumbnail(); ?>
          <?php endif; ?>
        </div>
        
        <div class="work-text">
          <p class="work-date"><?php the_time('Y.m.d'); ?></p>
          <h3 class="work-title"><?php the_title(); ?></h2>
        </div>

        </a>

      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="pagination">
      <?php
          the_posts_pagination([
          'mid_size'  => 1, 
          'end_size'  => 1, 
          'prev_text' => '',
          'next_text' => '',
          ]);
        ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>