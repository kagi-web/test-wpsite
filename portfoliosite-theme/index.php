<?php get_header(); ?>

        <div class="main">
            <div class="mainvisual">
              <img src="<?= get_template_directory_uri(); ?>/images/NCG443.jpg" alt="mainvisual">
            </div>
            <h1 class="main-title">OFFICIAL WEBSITE</h1>
        </div>
    

        <section id="gallery">
            <h2>GALLERY</h2>

          <div class="slider">
            <div class="slider-track">
              <img src="<?= get_template_directory_uri(); ?>/images/NCG443.jpg">
              <img src="<?= get_template_directory_uri(); ?>/images/NCG383.png">
              <img src="<?= get_template_directory_uri(); ?>/images/NCG377.jpg">
              <img src="<?= get_template_directory_uri(); ?>/images/NCG390.jpg">
              <img src="<?= get_template_directory_uri(); ?>/images/NCG415.jpg">

           
              <img src="<?= get_template_directory_uri(); ?>/images/NCG443.jpg">
              <img src="<?= get_template_directory_uri(); ?>/images/NCG383.png">
              <img src="<?= get_template_directory_uri(); ?>/images/NCG377.jpg">
              <img src="<?= get_template_directory_uri(); ?>/images/NCG390.jpg">
              <img src="<?= get_template_directory_uri(); ?>/images/NCG415.jpg">
            </div>
          </div>
          <div class="more-btn">
            <a href="<?php echo get_post_type_archive_link('gallery'); ?>" class="animoBubble5 menu__item">MORE</a>
          </div>
        </section>


        <section id="profile">
          <div class="container">
            <h2>PROFILE</h2>
            <div class="profile-content">
              <div class="profile-icon">
                <img src="<?= get_template_directory_uri(); ?>/images/NCG377.jpg" alt="profile">
              </div>
              <h3>活動者の名前</h3>
              <p>説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。説明文が入ります。</p>
            </div>
            <div class="sns-icon">
              <img src="<?= get_template_directory_uri(); ?>/images/X.svg" alt="X">
              <img src="<?= get_template_directory_uri(); ?>/images/pixiv_logo_icon_248844 1.svg" alt="X">
            </div>
          </div>
        </section>

        <section id="work">
          <div class="container">
            <h2>WORK</h2>
               <div class="work-list">
                  <?php
                  $work_query = new WP_Query([
                    'post_type' => 'work',
                    'posts_per_page' => 4
                  ]);
                  ?>

                  <?php if ($work_query->have_posts()): ?>
                  <?php while ($work_query->have_posts()): $work_query->the_post(); ?>

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
                      <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>

            <div class="more-btn">
            <a href="<?php echo get_post_type_archive_link('work'); ?>" class="animoBubble5 menu__item">MORE</a>
            </div>

          </div>
        </section>

        <section id="contact">
          <div class="container">
            <div class="content">
              <h2>CONTACT</h2>
              <p class="contact-text">個人、法人の方の依頼を受け付けております</p>
              <p class="contact-text">現在、○月○○日以降の依頼が可能です</p>
              <p class="mail">example@mail.jp</p>
            </div>
          </div>
        </section>
    </div>
  
<?php get_footer(); ?>