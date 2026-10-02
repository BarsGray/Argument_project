<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php the_title(); ?></title>
  <link rel="shortcut icon" href="<?php echo TEMPLATE_URL; ?>/img/favicon.ico" type="image/x-icon">
  <?php wp_head(); ?>
</head>
<body>
  <div class="overlay"></div>
  <header class="header">
    <div class="header_top_row">
      <div class="container">
        <p class="adress"><?php echo SVG_MAIL; ?><?php if($adress_main = get_field('adress_main')) echo $adress_main; ?></p>
        <div class="header_contacts">
          <a href="tel:+74732030911" class="header_tel"><?php echo SVG_PHONE; ?>+7 (473) 20-30-911</a>
          <a href="mailto:info@eosmedical.ru" class="header_mail"><?php echo SVG_PLACE; ?>info@eosmedical.ru</a>
        </div>
      </div>
    </div>
    <div class="header_nav_row">
      <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo"><img src="<?php echo TEMPLATE_URL; ?>/img/logo.svg" alt="Логотип"></a>
        <div class="header_menu_box">
          <div class="menu_row">
            <?php wp_nav_menu('menu=Меню в шапке&container=nav&container_class=menu'); ?>
            <div class="mobile_menu_bottom_box">
              <a href="tel:+74732030911" class="header_tel"><?php echo SVG_PHONE; ?>+7 (473) 20-30-911</a>
              <a href="#" class="header_main_btn">Заказать звонок</a>
            </div>
          </div>
          <form class="search_form" method="get" action="/">
            <button type="submit"><?php echo SVG_SEARCH; ?></button>
            <input type="search" name="s">
          </form>
          <a href="#" class="header_main_btn">Заказать звонок</a>
          <a href="#" class="menu_btn"><?php echo SVG_MENU_BTN; ?></a>
        </div>
      </div>
    </div>
  </header>