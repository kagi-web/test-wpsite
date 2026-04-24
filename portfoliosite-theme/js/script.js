function toggleMenu() {
      const menu = document.getElementById('menu');
      const trigger = document.querySelector('.hamburger');
      menu.classList.toggle('open');
      trigger.classList.toggle('open');
      document.body.classList.toggle("menu-open");
    }

