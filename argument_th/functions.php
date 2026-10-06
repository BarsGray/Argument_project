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