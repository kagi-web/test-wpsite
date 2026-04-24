<?php get_header(); ?>


<div class="container">
  <div class="work-detail">

    <h3><?php the_title(); ?></h1>
    <p><?php the_time('Y.m.d'); ?></p>

    <div class="work-content">
      <?php the_content(); ?>
    </div>

  </div>
</div>

<?php get_footer(); ?>