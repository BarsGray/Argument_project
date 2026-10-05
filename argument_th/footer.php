<?php
  $adress_main = get_field('adress_main', 30);
  $phone_main  = get_field('phone_main', 30);
?>
  <footer class="footer">
    <div class="footer_top_inner">
      <div class="container">
        <div class="footer_left">
          <a href="<?php echo home_url('/'); ?>" class="logo"><img src="<?php echo TEMPLATE_URL; ?>/img/logo.svg" alt="Логотип"></a>
        </div>
        <div class="footer_mid">
          <?php wp_nav_menu('menu=Меню в подвале&container=nav') ?>
        </div>
        <div class="footer_right">
          <a class="footer_main_btn" href="#">Заказать звонок</a>
          <?php if($adress_main): ?>
            <div class="footer_contact_elem">
              <p class="footer_contact_label">Адрес</p>
              <p class="footer_contact"><?php echo $adress_main; ?></p>
              <p class="footer_contact"><?php the_field('adress_main'); ?></p>
            </div>
          <?php endif; ?>
          <?php if($phone_main): ?>
            <div class="footer_contact_elem">
              <p class="footer_contact_label">Телефон</p>
              <a href="tel:<?php echo merge_numbers($phone_main); ?>" class="footer_contact"><?php echo $phone_main; ?></a>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="footer_copy_inner">
      <div class="container">
        <p class="company_copy">© АБ АРГУМЕНТ 2026</p>
        <p><a href="https://www.vzh.ru/"><img src="<?php echo TEMPLATE_URL; ?>/img/logo_vzh.svg" alt="vzh.ru"></a></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>