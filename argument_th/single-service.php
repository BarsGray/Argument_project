<?php
get_header();
title_def_box();

$query = new WP_Query(['post_type' => 'service', 'post_per_page' => -1]);
if($query->have_posts()): ?>
  <div class="section_services_tubs">
    <div class="container">
      <ul class="services_tubs_row">
        <?php while($query->have_posts()): $query->the_post(); ?>
          <li class="services_tub_item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; ?>
      </ul>
    </div>
  </div>
<?php wp_reset_postdata(); endif; ?>

  <div class="section_accordion">
    <div class="container template_info">
      <div class="accordion_left_box template_info_left_box">
        <p class="accordion_title"><?php the_title(); ?></p>
        <p class="accordion_text"><?php the_field('drop_down_text_sub_title'); ?></p>
      </div>
      <div class="accordion_right_box template_info_right_box">
        <?php $drop_down_list = get_field('drop_down_list');
          if ($drop_down_list): ?>
            <ul class="accordion">
              <?php foreach($drop_down_list as $item): ?>
                <li class="accordion_item">
                  <p class="accordion_item_title"><?php echo $item['drop_down_item_title']?: ''; ?></p>
                  <p class="accordion_item_text"><?php echo $item['drop_down_item_text']?: ''; ?></p>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
      </div>
    </div>
  </div>

<?php if ($security_price_title = get_field('security_price_title')): ?>
  <div class="section_service_price">
    <div class="container template_info">
      <div class="service_price_left_box template_info_left_box">
        <p class="service_price_title"><?php echo $security_price_title; ?></p>
        <?php if ($security_price_desc = get_field('security_price_desc')): ?>
          <p class="service_price_text"><?php echo $security_price_desc; ?></p>
        <?php endif; ?>
      </div>
      <div class="service_price_right_box template_info_right_box">
        <div class="info_box">
          <?php the_field('security_price_text'); ?>
        </div>
        <ul class="service_price_list">
          <?php if ($armed_security_price = get_field('armed_security_price')): ?>
            <li>
              <p class="service_price_list_title">Вооруженная охрана</p>
              <p class="service_price_list_price"><?php echo $armed_security_price; ?></p>
            </li>
          <?php endif; ?>
          <?php if ($unarmed_security_price = get_field('unarmed_security_price')): ?>
            <li>
              <p class="service_price_list_title">Невооруженная охрана</p>
              <p class="service_price_list_price"><?php echo $unarmed_security_price; ?></p>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
<?php endif;
  show_get_quote();
  show_qr_box();
  get_footer();