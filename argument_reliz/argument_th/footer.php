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
          <a class="footer_main_btn" data-popup_box href="#popup_box">Заказать звонок</a>
          <?php if($adress_main): ?>
            <div class="footer_contact_elem">
              <p class="footer_contact_label">Адрес</p>
              <p class="footer_contact"><?php echo $adress_main; ?></p>
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
    <div class="polit">
      <div class="container">
        <p><a class="privacy-policy-link" href="/privacy-policy/" rel="privacy-policy">Политика конфиденциальности</a></p>
        <p><a href="/politika-ispolzovaniya-fajlov-cookie/">Политика использования файлов cookie</a></p>
        <p><a href="/soglasie-na-obrabotku-personalnyh-dannyh/">Согласие на обработку персональных данных</a></p>
      </div>
    </div>
  </footer>
  <div id="popup_box" class="popup_box" style="display: none;">
    <div class="top_box">
      <p class="popup_title">Оставьте заявку</p>
      <p class="popup_text">Свяжемся с вами в ближайшее время, ответим на вопросы и подберём оптимальное решение.</p>
    </div>
    <?php echo do_shortcode('[contact-form-7 id="08e9a27"]'); ?>
  </div>
  <?php 
    if(!isset($_COOKIE['gdpr_site']))
      echo '<div class="gdpr"><p>Продолжая использовать наш веб-сайт, вы соглашаетесь на использование файлов cookie в соответствии с нашей <a href="'.get_privacy_policy_url().'" target="_blank">политикой конфиденциальности</a>.</p><a href="#">Хорошо</a></div>';
  ?>
  <?php wp_footer(); ?>
</body>
</html>