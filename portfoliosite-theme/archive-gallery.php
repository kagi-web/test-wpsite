<?php get_header(); ?>
<section id="gallery">
    <div class="container">
      <h2>GALLERY</h2>
      <div class="gallery-list">
        <?php if(have_posts()): ?>
          <?php while(have_posts()): the_post(); ?>

            <div class="gallery-item">
              <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail(); ?>
              <?php endif; ?>
            </div>

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