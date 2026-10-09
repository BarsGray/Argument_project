<?php
function show_breadcrumbs() { ?>
  <div class="bread_crumb">
    <div class="container">
      <?php breadcrumbs(); ?>
    </div>
  </div>
<?php }
function show_title() {
  // $teg = is_singular('product') ? 'h1' : 'p';
  $title = '';
  if (is_tax())
    $title = ($alt_zag = get_field('alt_zag')) ? $alt_zag : single_term_title('', false);
  elseif(is_category())
    $title = single_cat_title('', false);
  elseif(is_404())
    $title = 'Ошибка 404!';
  else
    $title = ($alt_zag = get_field('alt_zag')) ? $alt_zag : get_the_title();
  echo $title;
}
function title_def_box() { ?>
  <div class="section_title_box">
    <div class="container">
      <div class="title_box_inner">
        <p class="title"><?php if (is_singular('service')) echo 'Услуги'; else show_title(); ?></p>
      </div>
    </div>
  </div>
<?php }
function show_form() { ?>
  <div class="section_form">
    <div class="container">
      <div class="form_box">
        <div class="action_box">
          <p class="action_title">Получите коммерческое предложение</p>
          <p class="action_text">Оставьте заявку — наш специалист свяжется с вами в ближайшее время, ответит на все вопросы и предложит оптимальное решение для вашей безопасности.</p>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="08e9a27"]');?>
      </div>
    </div>
  </div>
<?php }
function show_info() {
  $info_box_title = get_field('info_box_title');
  $info_box_text = get_field('info_box_text');
  if($info_box_text || $info_box_title): ?>
    <div class="section_info_box">
      <div class="container">
        <div class="info_box template_info">
          <div class="info_title_wrap template_info_left_box">
            <p class="info_title"><?php echo $info_box_title; ?></p>
          </div>
          <div class="info_content template_info_right_box">
            <?php echo $info_box_text; ?>
          </div>
        </div>
      </div>
    </div>
<?php endif;
}
function show_license() {
  $license = get_field('license');
  if ($license): ?>
  <div class="section_license">
    <div class="container">
      <div class="license_slider swiper">
        <div class="license_slider_wrapper swiper-wrapper">
          <?php foreach($license as $item): ?>
            <div class="license_slider_item swiper-slide"><a href="<?php echo $item['url']; ?>" data-fancybox="gallery_license" class="license_slider_link"><img src="<?php echo $item['url']; ?>" alt="<?php echo $item['alt']; ?>"></a></div>
          <?php endforeach; ?>
        </div>
        <div class="license_slider_pagination"></div>
      </div>
      <div class="dec_line"></div>
    </div>
  </div>
<?php endif; }
function show_docs() {
  if ($docs = get_field('docs')): ?>
    <div class="section_docs">
      <div class="container template_info">
        <div class="template_info_left_box"><p class="info_title">Договорные документы и акты</p></div>
        <div class="docs_box template_info_right_box">
          <?php foreach($docs as $doc): ?>
            <a href="<?php echo $doc['doc']['url']; ?>" class="docs_item" download>
              <p class="doc_name"><?php echo $doc['doc_name']; ?></p>
              <p class="doc_btn">Скачать<?php echo SVG_CHEVRON_DOC_DOWN; ?></p>
              <p class="doc_size"><?php echo pathinfo($doc['doc']['filename'], PATHINFO_EXTENSION); ?>.<?php echo format_file_size($doc['doc']['filesize']); ?><span class="download_icon"></span></p>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  <?php endif;
}
function show_get_quote() { ?>
  <div class="section_feed">
    <div class="container">
      <div class="feed_inner">
        <div class="feed_left_box">
          <p class="feed_title">Получите расчет стоимости охраны</p>
          <p class="feed_text">Подберем оптимальный формат сопровождения, оценим уровень рисков и предложим решение, которое обеспечит безопасность вам и вашим близким.</p>
        </div>
        <div class="feed_right_box">
          <a class="feed_btn" href="#">Заказать услугу</a>
          <?php if ($phone_main  = get_field('phone_main', 30)): ?>
            <a class="feed_num" href="tel:<?php echo merge_numbers($phone_main); ?>"><span class="feed_icon_phone"><?php echo SVG_PHONE_QUOTE; ?></span><?php echo $phone_main; ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php }
function show_qr_box() { ?>
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
<?php }
function show_recvezits() { ?>
  <div class="section_recvezits">
    <div class="container">
      <div class="recvezits_box">
        <div class="recvezits_row template_info">
          <p class="recvezits_row_title template_info_left_box">Основные данные организации</p>
          <ul class="recvezits_data_list template_info_right_box">
            <?php if($company_name = get_field('company_name')): ?>
              <li class="recvezits_row_data"><span class="recvezits_data_name">Полное наименование</span><span class="recvezits_data_value"><?php echo $company_name; ?></span></li>
            <?php endif; ?>
            <?php if($date_registration = get_field('date_registration')): ?>
              <li class="recvezits_row_data"><span class="recvezits_data_name">ИНН</span><span class="recvezits_data_value"><?php echo $date_registration; ?></span></li>
            <?php endif; ?>
            <?php if($inn = get_field('inn')): ?>
              <li class="recvezits_row_data"><span class="recvezits_data_name">КПП</span><span class="recvezits_data_value"><?php echo $inn; ?></span></li>
            <?php endif; ?>
            <?php if($kpp = get_field('kpp')): ?>
              <li class="recvezits_row_data"><span class="recvezits_data_name">ОГРН</span><span class="recvezits_data_value"><?php echo $kpp; ?></span></li>
            <?php endif; ?>
            <?php if($ogrn = get_field('ogrn')): ?>
              <li class="recvezits_row_data"><span class="recvezits_data_name">ОКПО</span><span class="recvezits_data_value"><?php echo $ogrn; ?></span></li>
            <?php endif; ?>
            <?php if($okpo = get_field('okpo')): ?>
              <li class="recvezits_row_data"><span class="recvezits_data_name">Дата регистрации</span><span class="recvezits_data_value"><?php echo $okpo; ?></span></li>
            <?php endif; ?>
          </ul>
        </div>
        <?php
        $legal_address = get_field('legal_address');
        $adress_main = get_field('adress_main', 30);

        if($adress_main || $legal_address): ?>
          <div class="recvezits_row template_info">
            <p class="recvezits_row_title template_info_left_box">Адрес</p>
            <ul class="recvezits_data_list template_info_right_box">
              <li class="recvezits_row_data"><span class="recvezits_data_name">Юридический адрес</span><span class="recvezits_data_value"><?php echo $legal_address ?: $adress_main; ?></span></li>
              <?php if($adress_main): ?>
                <li class="recvezits_row_data"><span class="recvezits_data_name">Фактический адрес</span><span class="recvezits_data_value"><?php echo $adress_main; ?></span></li>
              <?php endif; ?>
            </ul>
          </div>
        <?php endif; ?>
        <div class="recvezits_row template_info">
          <p class="recvezits_row_title template_info_left_box">Банковские реквизиты</p>
          <ul class="recvezits_data_list template_info_right_box">
            <?php if($bank_name = get_field('bank_name')): ?>
              <li class="recvezits_row_data"><span class="recvezits_data_name">Наименование банка</span><span class="recvezits_data_value"><?php echo $bank_name; ?></span></li>
            <?php endif; ?>
            <?php if($bik = get_field('bik')): ?>
              <li class="recvezits_row_data"><span class="recvezits_data_name">БИК</span><span class="recvezits_data_value"><?php echo $bik; ?></span></li>
            <?php endif; ?>
            <?php if($corschet = get_field('corschet')): ?>
              <li class="recvezits_row_data"><span class="recvezits_data_name">Корсчет</span><span class="recvezits_data_value"><?php echo $corschet; ?></span></li>
            <?php endif; ?>
            <?php if($current_account = get_field('current_account')): ?>
              <li class="recvezits_row_data"><span class="recvezits_data_name">Расчётный счёт</span><span class="recvezits_data_value"><?php echo $current_account; ?></span></li>
            <?php endif; ?>
          </ul>
        </div>
        <?php if ($phones = get_field('phones',30)): ?>
          <div class="recvezits_row template_info">
            <p class="recvezits_row_title template_info_left_box">Контакты</p>
            <ul class="recvezits_data_list template_info_right_box">
              <?php foreach($phones as $item): ?>
                <li class="recvezits_row_data"><span class="recvezits_data_name"><?php echo $item['otdel']; ?></span><span class="recvezits_data_value"><a href="<?php echo merge_numbers($item['number']); ?>"><?php echo $item['number']; ?></a></span></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>
        <?php if ($mails = get_field('mails',30)): ?>
        <div class="recvezits_row template_info">
          <p class="recvezits_row_title template_info_left_box">Электронная почта</p>
          <ul class="recvezits_data_list template_info_right_box">
            <?php foreach($mails as $item): ?>
              <li class="recvezits_row_data"><span class="recvezits_data_name"><?php echo $item['otdel']; ?></span><span class="recvezits_data_value"><a href="mailto:<?php echo $item['email']; ?>"><?php echo $item['email']; ?></a></span></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php }
function show_rewiews() { ?>
  <?php
  $query = new WP_Query(['post_type' => 'rewiews', 'posts_per_page' => -1]);
  if($query->have_posts()): ?>
    <div class="section_rewiews">
      <div class="container rewiews_box">
        <?php while($query->have_posts()): $query->the_post(); ?>
        <?php $stars_count = get_field('ocenka'); ?>
          <div class="rewiews_item">
            <p class="rewiews_item_name"><?php the_title(); ?></p>
            <div class="rewiews_item_text"><?php the_content(); ?></div>
            <p class="rewiews_item_rating">
              <?php for($i = 0; $i < 5; $i++): ?>
                <span class="rewiews_item_star <?php if($i < $stars_count) echo 'star_active'; ?>"></span>
              <?php endfor; ?>
            </p>
            <p class="rewiews_item_date"><?php echo get_the_date('d.m.Y'); ?></p>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
<?php endif; }
