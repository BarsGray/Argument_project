<?php
get_header();
show_breadcrumbs();
title_def_box();

$service_id = get_the_ID();
show_services_tubs();

$drop_down_list = get_field('drop_down_list');
$drop_down_title = get_field('drop_down_title');
$drop_down_text_sub_title = get_field('drop_down_text_sub_title');

if ($drop_down_list || $drop_down_title || $drop_down_text_sub_title): ?>
  <div class="section_accordion">
    <div class="container template_info">
      <div class="accordion_left_box template_info_left_box">
        <?php if ($drop_down_title): ?><p class="accordion_title"><?php echo $drop_down_title; ?></p><?php endif; ?>
        <?php if ($drop_down_text_sub_title): ?><p class="accordion_text"><?php echo $drop_down_text_sub_title; ?></p><?php endif; ?>
      </div>
      <div class="accordion_right_box template_info_right_box">
        <ul class="accordion">
          <?php if ($drop_down_list):
            foreach($drop_down_list as $item): ?>
              <li class="accordion_item">
                <p class="accordion_item_title"><?php echo $item['drop_down_item_title']?: ''; ?></p>
                <p class="accordion_item_text"><?php echo $item['drop_down_item_text']?: ''; ?></p>
              </li>
            <?php endforeach;
          endif; ?>
        </ul>
      </div>
    </div>
  </div>
<?php endif;

$security_price_title   = get_field('security_price_title');
$security_price_desc    = get_field('security_price_desc');
$armed_security_price   = get_field('armed_security_price');
$unarmed_security_price = get_field('unarmed_security_price');
$security_price_text    = get_field('security_price_text');

if ($armed_security_price || $unarmed_security_price || $security_price_text || $security_price_title): ?>
  <div class="section_service_price">
    <div class="container template_info">
      <div class="service_price_left_box template_info_left_box">
        <?php if ($security_price_title): ?><p class="service_price_title"><?php echo $security_price_title; ?></p><?php endif; ?>
        <?php if ($security_price_desc): ?><p class="service_price_text"><?php echo $security_price_desc; ?></p><?php endif; ?>
      </div>
      <?php if ($armed_security_price || $unarmed_security_price || $security_price_text): ?>
        <div class="service_price_right_box template_info_right_box">
          <div class="info_box"><?php the_field('security_price_text'); ?></div>
          <ul class="service_price_list">
            <?php if ($armed_security_price): ?>
              <li>
                <p class="service_price_list_title">Вооруженная охрана</p>
                <p class="service_price_list_price"><?php echo $armed_security_price; ?></p>
              </li>
            <?php endif; ?>
            <?php if ($unarmed_security_price): ?>
              <li>
                <p class="service_price_list_title">Невооруженная охрана</p>
                <p class="service_price_list_price"><?php echo $unarmed_security_price; ?></p>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php endif;
  if(get_field('text_after')): ?>
  <div class="content_container hide">
    <div class="container">
      <div class="hide_text"><?php the_field("text_after");?></div>
      <a class="more">Подробнее</a>
    </div>
  </div>
<?php endif;
  show_get_quote();
  show_qr_box();
  get_footer();