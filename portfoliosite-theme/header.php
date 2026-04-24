<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <header>
      <div class="header-right">
        <div class="hamburger" onclick="toggleMenu()">
          <div class="hamburger__line"></div>
          <div class="hamburger__line"></div>
          <div class="hamburger__line"></div>
        </div>

        <div class="menu slide-top" id="menu">
          <a href="<?php echo  home_url('/'); ?>" class="animoBubble5 menu__item">
            <span class="text">HOME</span>
          </a>
          <a href="<?php echo get_post_type_archive_link('gallery'); ?>" class="animoBubble5 menu__item">
            <span class="text">GALLERY</span>
          </a>
          <a href="<?php echo home_url('/'); ?>#profile" class="animoBubble5 menu__item">
            <span class="text">PROFILE</span>
          </a>
          <a href="<?php echo get_post_type_archive_link('work'); ?>" class="animoBubble5 menu__item">
            <span class="text">WORK</span>
          </a>
          <a href="<?php echo home_url('/'); ?>#contact" class="animoBubble5" class="menu__item">
            <span class="text">CONTACT</span>
          </a>
        </div>
      </div>
    </header>