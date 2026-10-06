<?php /* Template Name: Главная */ get_header(); ?>
  <div class="section_bunner">
    <div class="container">
      <div class="bunner_swiper swiper">
        <div class="bunner_swiper_row swiper-wrapper">
          <div class="bunner_slide swiper-slide">
            <div class="bunner_content">
              <p class="bunner_slide_title">Охрана которой доверяют</p>
              <p class="bunner_slide_text">Частное охранное предприятие «Аргумент» — физическая защита, дистанционный мониторинг и монтаж систем безопасности в Воронеже, Курске, Белгороде и Тамбове. Профессионально и конфиденциально.</p>
              <a href="#" class="bunner_slide_btn">Получить консультацию</a>
            </div>
            <div class="bunner_img" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/bg.jpg');"></div>
          </div>
          <div class="bunner_slide swiper-slide">
            <div class="bunner_content">
              <p class="bunner_slide_title">Охрана которой доверяют</p>
              <p class="bunner_slide_text">Частное охранное предприятие «Аргумент» — физическая защита, дистанционный мониторинг и монтаж систем безопасности в Воронеже, Курске, Белгороде и Тамбове. Профессионально и конфиденциально.</p>
              <a href="#" class="bunner_slide_btn">Получить консультацию</a>
            </div>
            <div class="bunner_img" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/bg.jpg');"></div>
          </div>
          <div class="bunner_slide swiper-slide">
            <div class="bunner_content">
              <p class="bunner_slide_title">Охрана которой доверяют</p>
              <p class="bunner_slide_text">Частное охранное предприятие «Аргумент» — физическая защита, дистанционный мониторинг и монтаж систем безопасности в Воронеже, Курске, Белгороде и Тамбове. Профессионально и конфиденциально.</p>
              <a href="#" class="bunner_slide_btn">Получить консультацию</a>
            </div>
            <div class="bunner_img" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/bg.jpg');"></div>
          </div>
        </div>
        <div class="bunner_pagination"></div>
      </div>
      <div class="bunner_btn_prev"></div>
      <div class="bunner_btn_next"></div>
    </div>
  </div>
  
  <?php $query = new WP_Query(['post_type' => 'service', 'post_per_page' => -1]);
  if ($query->have_posts()): ?>
    <div class="section_services">
      <div class="container">
        <p class="services_title"><a class="services_title_link" href="<?php the_permalink(15) ?>">Что мы предлагаем<?php echo SVG_CHEVRON_TITLE_LINK; ?></a></p>
        <div class="services_box">
          <?php while($query->have_posts()): $query->the_post();
            $service_icon = get_field('service_icon')?: TEMPLATE_URL . '/img/shield.png';
          ?>
            <a href="<?php the_permalink(); ?>" class="services_item">
              <span class="services_icon" style="background-image: url('<?php echo $service_icon; ?>')"></span>
              <p class="services_name"><?php the_title(); ?></p>
              <p class="services_text"><?php the_field('service_front_text'); ?></p>
              <p class="services_btn">Подробнее<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.59961 3.60242L10.2902 7.29297C10.6807 7.68349 10.6807 8.31666 10.2902 8.70718L6.59961 12.3977" stroke="#7E7E7E" stroke-width="2"/></svg></p>
            </a>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  <?php wp_reset_postdata(); endif; ?>

  <div class="sectiot_qr">
    <div class="container">
      <div class="qr_inner">
        <div class="qr_content">
          <p class="qr_title">Управление охраной в одно касание</p>
          <p class="qr_text">Управляйте системой безопасности удаленно: ставьте объекты под защиту, отслеживайте события, пополняйте счет и вызывайте тревожную группу — всё через мобильное приложение.</p>
          <div class="qr_links">
            <a href="#" class="qr" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/6a4202141.png');"></a>
            <a href="#" class="app_stor"></a>
            <a href="#" class="g_play"></a>
          </div>
        </div>
        <div class="qr_dec"></div>
      </div>
    </div>
  </div>

  <div class="section_integration">
    <div class="container">
      <div class="integration_top_row">
        <p class="integration_title">От заявки до защиты</p>
        <p class="integration_text">Мы ценим ваше время. Весь процесс от первого звонка до запуска охраны занимает минимум времени — без бюрократии и лишних согласований.</p>
      </div>
      <div class="integration_steps">
        <div class="steps_item">
          <div class="steps_item_header"><p class="steps_item_num">01</p></div>
          <div class="steps_item_body">
            <p class="steps_item_title">Заявка и консультация</p>
            <p class="steps_item_text">Оставьте заявку на сайте или позвоните нам сейчас. Менеджер бесплатно выслушает вашу задачу и предложит лучшее решение.</p>
          </div>
        </div>
        <div class="steps_item">
          <div class="steps_item_header"><p class="steps_item_num">02</p></div>
          <div class="steps_item_body">
            <p class="steps_item_title">Обследование объекта</p>
            <p class="steps_item_text">Специалист выезжает на объект, оценивает риски и составляет индивидуальный план охраны. С учётом всех деталей.</p>
          </div>
        </div>
        <div class="steps_item">
          <div class="steps_item_header"><p class="steps_item_num">03</p></div>
          <div class="steps_item_body">
            <p class="steps_item_title">Заключение договора</p>
            <p class="steps_item_text">Подписываем договор с учётом всех ваших пожеланий. Прозрачные условия без скрытых платежей. Цена окончательная.</p>
          </div>
        </div>
        <div class="steps_item">
          <div class="steps_item_header"><p class="steps_item_num">04</p></div>
          <div class="steps_item_body">
            <p class="steps_item_title">Объект под охраной</p>
            <p class="steps_item_text">Весь объект берётся под надёжную охрану. Вы получаете полную постоянную защиту и оперативную связь с нашей диспетчерской 24/7.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section_labels">
    <div class="container"><p class="labels_title">Нам доверяют</p></div>
    <div class="labels_marquee">
      <div class="labels_track">
        <ul class="labels_list">
          <li><div class="label_logo" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/labels/Agrokultura_logo_rus 1.png');"></div></li>
          <li><div class="label_logo" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/labels/image 36.png');"></div></li>
          <li><div class="label_logo" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/labels/foni-papik-pro-vcc0-p-kartinki-gazpromneft-logo-na-prozrachnom-f-9 1.png');"></div></li>
          <li><div class="label_logo" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/labels/Frame 9163.png');"></div></li>
          <li><div class="label_logo" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/labels/image 36.png');"></div></li>
          <li><div class="label_logo" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/labels/Agrokultura_logo_rus 1.png');"></div></li>
          <li><div class="label_logo" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/labels/image 37.png');"></div></li>
          <li><div class="label_logo" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/labels/MTSBank_Logo_800px 1.png');"></div></li>
          <li><div class="label_logo" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/labels/ycykLdD3Nbx-y9TqPQUxoaPUvWif699DYC-9U3kDpDEKDNODjLctMcCqRW4idwuBlpopV1yaJoaS8FXtMKRynOap 1.png');"></div></li>
          <li><div class="label_logo" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/labels/Agrokultura_logo_rus 1.png');"></div></li>
          <li><div class="label_logo" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/labels/AnderSon_logo-1024x364 1.png');"></div></li>
          <li><div class="label_logo" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/labels/foni-papik-pro-vcc0-p-kartinki-gazpromneft-logo-na-prozrachnom-f-9 1.png');"></div></li>
          <li><div class="label_logo" style="background-image: url('<?php echo TEMPLATE_URL; ?>/img/labels/Frame 9163.png');"></div></li>
        </ul>
      </div>
    </div>
  </div>

<?php
  show_form();
  get_footer(); ?>